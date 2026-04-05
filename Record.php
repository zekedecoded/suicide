<?php
namespace Classes;
// use pdo_connection4;
require_once 'connection/pdo_connection4.php';
// require "connection/pdo_connection4.php";
class Wallet
{
    public int $userID;
    public string $last_name;
    public string $first_name;
    public string $middle_name;
    public string $suffix;
    public string $contact_number;
    public string $email;
    public string $balance;
    public string $roleID;
    public string $password;
    public string $profile_img;
    public string $yr_lvl;
    public string $courseID;
    private $con;
    private string $response;

    public function __construct($db)
    {
        $this->con = $db;
    }

    public function getPost()
    {
        if (!empty($_POST)) {
            $this->last_name = $_POST['last_name'];
            $this->first_name = $_POST['first_name'];
            $this->middle_name = $_POST['middle_name'];
            $this->suffix = $_POST['suffix'];
            $this->contact_number = $_POST['contact_number'];
            $this->email = $_POST['email'];
            $this->yr_lvl = $_POST['yr_lvl'];
            $this->courseID = $_POST['courseID'];
        }
    }

    // ADDING FUNCTION
    public function Add()
    {
        if (isset($_POST['Add'])) {
            $this->getPost();

            // Insert into users first — balance starts at 0, roleID 1 = student
            $stmt = $this->con->prepare(
                'INSERT INTO users (last_name, first_name, middle_name, suffix, contact_number, email, balance, roleID, password, profile_img)
                 VALUES (?, ?, ?, ?, ?, ?, 0, 1, "", "")',
            );
            $stmt->execute([
                $this->last_name,
                $this->first_name,
                $this->middle_name,
                $this->suffix,
                $this->contact_number,
                $this->email,
            ]);

            // Get the newly inserted userID
            $newUserID = $this->con->lastInsertId();

            // Insert into student_info using the new userID
            $stmt2 = $this->con->prepare(
                'INSERT INTO student_info (userID, studentID, yr_lvl, courseID) VALUES (?, "", ?, ?)',
            );
            $stmt2->execute([$newUserID, $this->yr_lvl, $this->courseID]);

            $this->responseSQL($stmt2);
            header('Location: ./admin_manager.php');
        }
    }

    // Delete Function
    public function delete($userID)
    {
        $stmt = $this->con->prepare('DELETE FROM users WHERE userID = ?');
        $stmt->execute([$userID]);
        return $stmt->rowCount() > 0;
    }

    //Edit Function
    public function edit($userID)
    {
        $this->getPost();
        if (!empty($_POST)) {
            $stmt = $this->con->prepare(
                'UPDATE users SET last_name = ?, first_name = ?, middle_name = ?, suffix = ?, contact_number = ?, email = ? WHERE userID = ?',
            );
            $stmt->execute([
                $this->last_name,
                $this->first_name,
                $this->middle_name,
                $this->suffix,
                $this->contact_number,
                $this->email,
                $userID,
            ]);

            // Update student_info separately — yr_lvl and courseID live there
            $stmt2 = $this->con->prepare(
                'UPDATE student_info SET yr_lvl = ?, courseID = ? WHERE userID = ?',
            );
            $stmt2->execute([$this->yr_lvl, $this->courseID, $userID]);

            $this->responseSQL($stmt);
            header("Location: ../includes/editEmployment.php?id=$userID");
        }
    }

    public function view($userID)
    {
        if (!$userID) {
            return 0;
        }
        // Join student_info and course to get full student profile
        $stmt = $this->con->prepare(
            'SELECT u.*, s.stud_infoID, s.studentID, s.yr_lvl, c.courseID, c.course_code, c.course_name
             FROM users u
             LEFT JOIN student_info s ON u.userID = s.userID
             LEFT JOIN course c ON s.courseID = c.courseID
             WHERE u.userID = ?',
        );
        $stmt->execute([$userID]);
        return $stmt->rowCount() ? $stmt->fetch() : 0;
    }

    public function getAll()
    {
        $stmt = $this->con->prepare(
            'SELECT u.*, s.yr_lvl, c.course_code
             FROM users u
             LEFT JOIN student_info s ON u.userID = s.userID
             LEFT JOIN course c ON s.courseID = c.courseID',
        );
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }

    // Fetch all courses for the Program dropdown
    public function getCourses()
    {
        $stmt = $this->con->prepare('SELECT * FROM course');
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }
    public function getTransactions()
    {
        $stmt = $this->con->prepare("SELECT 
            t.transactionID,
            t.amount,
            t.date_time,
            t.description,
            
            su.first_name AS student_firstname,
            su.last_name AS student_lastname,
            
            m.stall_name AS merchant_name
        FROM transaction t
        JOIN wallet w ON t.wallet_id = w.wallet_id
        JOIN users su ON w.userID = su.userID
        LEFT JOIN merchant m ON t.merchantID = m.merchantID
        ORDER BY t.date_time DESC
        ");
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }

    public function responseSQL($stmt)
    {
        if ($stmt->rowCount()) {
            $this->response = 'success';
        } else {
            $this->response = 'failed';
        }
    }

    public function getResponse()
    {
        return $this->response;
    }
}
$Record = new Wallet($db);
