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
    public string $yr_lvl;
    public string $course;
    public string $contact_number;
    public string $email;
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
            $this->yr_lvl = $_POST['yr_lvl'];
            $this->course = $_POST['course'];
            $this->contact_number = $_POST['contact_number'];
            $this->email = $_POST['email'];
        }
    }
    // ADDING FUNCTION
    public function Add()
    {
        if (isset($_POST['Add'])) {
            $this->getPost();
            $stmt = $this->con->prepare(
                'INSERT INTO users(last_name,first_name,middle_name,suffix,yr_lvl,course,contact_number,email) VALUES (?,?,?,?,?,?,?,?)',
            );
            $stmt->execute([
                $this->last_name,
                $this->first_name,
                $this->middle_name,
                $this->suffix,
                $this->yr_lvl,
                $this->course,
                $this->contact_number,
                $this->email,
            ]);
            $this->responseSQL($stmt);
            header('Location: ../index.php');
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
                'UPDATE users SET last_name = ?, first_name = ?, middle_name = ?, suffix = ?, yr_lvl = ?, course = ?, contact_number = ?, email = ? WHERE userID = ?',
            );
            $stmt->execute([
                $this->last_name,
                $this->first_name,
                $this->middle_name,
                $this->suffix,
                $this->yr_lvl,
                $this->course,
                $this->contact_number,
                $this->email,
                $userID,
            ]);
            $this->responseSQL($stmt);
            header("Location: ../includes/editEmployment.php?id=$userID");
        }
    }
    public function view($userID)
    {
        if (!$userID) {
            return 0;
        }
        $stmt = $this->con->prepare('SELECT * FROM users WHERE userID = ?');
        $stmt->execute([$userID]);
        return $stmt->rowCount() ? $stmt->fetch() : 0;
    }
    public function getAll()
    {
        $stmt = $this->con->prepare('SELECT * FROM users');
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }

    // jastine
    public function getTransactions()
    {
        $stmt = $this->con->prepare("SELECT 
            t.date_time,
            su.first_name AS student_firstname,
            su.last_name AS student_lastname,
            m.stall_name AS merchant_name,
            a.first_name AS admin_firstname,
            a.last_name AS admin_lastname,
            t.amount,
            t.description
        FROM transaction t
        JOIN wallet w ON t.wallet_id = w.wallet_id
        JOIN users su ON w.userID = su.userID
        LEFT JOIN merchant m ON t.merchantID = m.merchantID
        LEFT JOIN topup tp 
            ON tp.wallet_id = t.wallet_id 
            AND tp.amount = t.amount 
            AND DATE(tp.date_time) = DATE(t.date_time)
        LEFT JOIN users a ON tp.adminID = a.userID
        ORDER BY t.date_time DESC;
        ");
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }

    // jastine
    public function countStudents()
    {
        $stmt = $this->con->prepare("SELECT COUNT(*) as totalStudents FROM users WHERE roleID = 1");
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }
    // jastine
    public function countMerchant()
    {
        $stmt = $this->con->prepare("SELECT COUNT(*) as totalMerchant FROM users WHERE roleID = 2");
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }
    // jastine
    public function countTransactions()
    {
        $stmt = $this->con->prepare(
            'SELECT COUNT(*) as totalTransactions FROM transaction',
        );
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }
    // jastine
    public function todayVolume()
    {
        $stmt = $this->con->prepare(
            'SELECT SUM(amount) as totalVolume FROM transaction WHERE DATE(date_time) = CURDATE()',
        );
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchColumn();
    }
    // jastine

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
$Project = new Wallet($db);
