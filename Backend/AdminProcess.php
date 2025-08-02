<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    switch ($process) {
        case "dashboard":
            //code block
            include("../admin/dashboard.php");
            break;
        case "farmer":
            //code block;
            include("../admin/farmer.php");
            break;
        case "laboratory":
            //code block
            include("../admin/lab.php");
            break;
        case "report":
            //code block
            $requestQuery = "SELECT r.report_id, r.farmer_id, r.sample_id, s.collected_date, r.lab_id, r.status, r.report_image, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM report_detail As r
            JOIN farmer_detail As f 
            Join sample_detail As s
            ON r.farmer_id = f.farmer_id AND r.sample_id = s.sample_id
            WHERE r.lab_id = s.lab_id;";

            $result = mysqli_query($con, $requestQuery);
            if ($result) {
                $reportrequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    // print_r($row);
                    $reportrequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }
            include("../admin/report.php");
            break;
        case "notification":
            //code block
            include("../admin/Notification.php");
            break;
        case "messages":
            //code block
            include("../admin/msg.php");
            break;
        case "profile":
            //code block
            $adminQuery = "SELECT `adminprofile`,`name`, `password` FROM `admin` WHERE `admin_id`= " . $_SESSION['admin'] . ";";
            $result = mysqli_query($con, $adminQuery);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $admindata[] = $row;
                }
            } else {
                echo "No user found";
            }
            include("../admin/profile.php");
            break;
        case "changeProfile":
            //code block
            $file_name = $_FILES['profilePicture']['name'];
            $file_tmp = $_FILES['profilePicture']['tmp_name'];
            $uploadPath = '../img/admin_img/';

            $profilePicPath = $uploadPath . $file_name;

            if (move_uploaded_file($file_tmp, $uploadPath . $file_name)) {
                $sql = "UPDATE `admin` SET adminprofile='$profilePicPath' WHERE `admin_id`=" . $_SESSION['admin'] . ";";
                if (mysqli_query($con, $sql)) {
                    echo "Successfully Uploaded";
                } else {
                    echo "Error while uploading";
                }
            } else {
                echo "Error uploading file. Check if the directory has the correct permissions";
            }
            break;
        case "setting":
            //code block
            include("../admin/setting.php");
            break;
        case "addTask":
            //code block
            $task = $_POST['task'];
            $userid = $_POST['userid'];
            $sql = "INSERT INTO task_detail (task,user_id) VALUES ('$task','$userid')";
            $result = mysqli_query($con, $sql);
            if ($result == 1) {
                echo "Task Added Successfully!";
            } else {
                echo "Error while adding Task!";
            }
            break;
        case "deleteTask":
            //code block
            $taskid = $_POST['taskid'];
            $userid = $_POST['userid'];
            // echo $taskid . " " . $userid;
            $sql = "DELETE FROM task_detail WHERE `task_detail`.`task_id` = '$taskid' AND `task_detail`.`user_id` = '$userid';";
            $result = mysqli_query($con, $sql);
            if ($result == 1) {
                echo "Task Deleted Successfully!";
            } else {
                echo "Error while deleting Task!";
            }
            break;
        case "userSearch":
            $searchText = $_POST['searchText'];

            $searchText = mysqli_real_escape_string($con, $searchText);
            $sql = "
            (
                SELECT
                    farmer_id AS id,
                    CONCAT(
                        first_name,
                        ' ',
                        middle_name,
                        ' ',
                        last_name
                    ) AS name,
                    email,
                    contact_number AS contact_detail,
                    address,
                    city,
                    state,
                    farmerprofile AS profile,
                    'Farmer' AS flag
                FROM
                    farmer_detail
                WHERE
                    (
                        first_name LIKE '%$searchText%' OR middle_name LIKE '%$searchText%' OR last_name LIKE '%$searchText%' OR email LIKE '%$searchText%'
                    )
                ORDER BY CASE WHEN
                    middle_name LIKE '$searchText%' THEN 1 WHEN middle_name LIKE '%$searchText' THEN 3 WHEN middle_name NOT LIKE '%$searchText%' THEN 4 ELSE 2
                END,
                middle_name,
                farmer_id ASC
                LIMIT 50 OFFSET 0
                )
                UNION ALL
                (
                    SELECT
                        lab_id AS id,
                        lab_name AS name,
                        email,
                        contact AS contact_detail,
                        lab_add AS address,
                        city,
                        state,
                        labprofile AS profile,
                        'Laboratory' AS flag
                    FROM
                        laboratory_detail
                    WHERE
                STATUS
                    = 'Approved' AND(
                        lab_name LIKE '%$searchText%' OR email LIKE '%$searchText%'
                    )
                ORDER BY CASE WHEN
                    lab_name LIKE '$searchText%' THEN 1 WHEN email NOT LIKE '%$searchText%' THEN 3 ELSE 2
                END,
                lab_name,
                lab_id ASC
                LIMIT 50 OFFSET 0
            )";

            $result = mysqli_query($con, $sql);
            if ($result) {
                $searchResult = [];
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr
                        class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>
                        <td class='px-6 py-4'>
                            <?php
                            if (file_exists($row["profile"]) == true) {
                                echo " <img src='../img/" . $row["profile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                            } else {
                                echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                            } ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['name'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['email'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['contact_detail'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['address'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['city'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['state'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['flag'] ?>
                        </td>
                    </tr>
                <?php
                }
                mysqli_free_result($result);
            } else {
                echo "No details found!";
            }
            break;
        case "farmerSearch":
            $searchText = $_POST['searchText'];
            $searchText = mysqli_real_escape_string($con, $searchText);
            $sql = "SELECT
                    farmer_id AS id,
                    CONCAT(
                        first_name,
                        ' ',
                        middle_name,
                        ' ',
                        last_name
                    ) AS name,
                    email,
                    contact_number AS contact_detail,
                    address,
                    city,
                    state,
                    farmerprofile AS profile,
                    'Farmer' AS flag
                FROM
                    farmer_detail
                WHERE
                    (
                        first_name LIKE '%$searchText%' OR middle_name LIKE '%$searchText%' OR last_name LIKE '%$searchText%' OR email LIKE '%$searchText%'
                    )
                ORDER BY CASE WHEN
                    middle_name LIKE '$searchText%' THEN 1 WHEN middle_name LIKE '%$searchText' THEN 3 WHEN middle_name NOT LIKE '%$searchText%' THEN 4 ELSE 2
                END,
                middle_name,
                farmer_id ASC
                LIMIT 50 OFFSET 0";

            $result = mysqli_query($con, $sql);
            if ($result) {
                $searchResult = [];
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr
                        class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>

                        <td class='px-6 py-4 flex items-center gap-4'>
                            <?php
                            if (file_exists($row["profile"]) == true) {
                                echo " <img src='../img/" . $row["profile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                            } else {
                                echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                            } ?>
                            <?php echo $row['name'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['email'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['contact_detail'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['address'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['city'] ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['state'] ?>
                        </td>
                    </tr>
                <?php
                }
                mysqli_free_result($result);
            } else {
                echo "No details found!";
            }
            break;
        case "labSearch":
            $isApprovedLab = $_POST['searchLabType'];
            $searchText = $_POST['searchText'];
            $searchText = mysqli_real_escape_string($con, $searchText);

            $approvedLabCondition = ($isApprovedLab == 'true' ? " status = 'Approved' AND " : '');

            $sql = "SELECT
                        lab_id AS id,
                        lab_name AS name,
                        email,
                        contact AS contact_detail,
                        lab_add AS address,
                        city,
                        state,
                        labprofile AS profile,
                        ownership,
                        status
                    FROM
                        laboratory_detail
                    WHERE $approvedLabCondition (
                        lab_name LIKE '%$searchText%' OR email LIKE '%$searchText%'
                    )
                    ORDER BY CASE WHEN
                        lab_name LIKE '$searchText%' THEN 1 WHEN email NOT LIKE '%$searchText%' THEN 3 ELSE 2
                    END,
                    lab_name,
                    lab_id ASC
                LIMIT 50 OFFSET 0";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $searchResult = [];
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr
                        class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>
                        <td class='px-6 w-3 py-4 font-medium whitespace-nowrap'>
                            <?php
                            if ($isApprovedLab == 'true') {
                                echo $row['name'];
                            } else {
                                echo $row['id'];
                            }
                            ?>
                        </td>
                        <?php
                        if ($isApprovedLab != 'true') {
                        ?>
                            <td class='px-6 py-4'>
                                <?php echo $row['name']; ?>
                            </td>
                        <?php
                        }
                        ?>
                        <td class='px-6 py-4'>
                            <?php echo $row['email']; ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['contact_detail']; ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['address']; ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['city']; ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['state']; ?>
                        </td>
                        <td class='px-6 py-4'>
                            <?php echo $row['ownership']; ?>
                        </td>
                        <?php
                        if ($isApprovedLab != 'true') {
                        ?>
                            <td class='px-6 py-2'>
                                <button
                                    onclick="ApproveLab('<?php echo $row['id'] ?>','<?php echo $row['email'] ?>')"
                                    class='px-6 py-2 rounded-lg bg-green-400 hover:bg-green-500 text-gray-50 dark:text-gray-700'>
                                    <?php echo (($row['status'] == 'Approved') ? 'Approved' : 'Approve'); ?>
                                </button>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                mysqli_free_result($result);
            } else {
                echo "No details found!";
            }
            break;
        default:
            //code block
            echo $process . "\n";
            echo "Invalid Request";
            break;
    }
}
