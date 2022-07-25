<?php
require_once __DIR__.'/Student.php';
require_once __DIR__.'/Subject.php';

class Mark
{
    private int $id;
    private Student $student;
    private Subject $subject;
    private int $value;

    public function __construct($id, $student, $subject, $value)
    {
        $this->id = $id;
        $this->student = $student;
        $this->subject = $subject;
        $this->value = $value;
    }

    public function getId() {
        return $this->id;
    }

    public function getStudent() {
        return $this->student;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getValue() {
        return $this->value;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setStudent($student) {
        $this->student = $student;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setValue($value) {
        $this->value = $value;
    }
}