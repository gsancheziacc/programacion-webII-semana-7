<?php
require_once './entities/Student.php';
require_once './entities/Subject.php';
require_once './entities/Mark.php';

$subjects = [
    new Subject(1, 'Matemáticas'),
    new Subject(2, 'Lenguaje'),
];

$student = new Student(1, 'John', 20, 'A');
$marksStudent = [];
$marksStudent[] = new Mark(1, $student, $subjects[0], 9);
$marksStudent[] = new Mark(2, $student, $subjects[1], 9);
$marksStudent[] = new Mark(3, $student, $subjects[0], 6);
$marksStudent[] = new Mark(4, $student, $subjects[1], 7);

$student = new Student(2, 'Jane', 21, 'B');
$marksStudent[] = new Mark(5, $student, $subjects[0], 7);
$marksStudent[] = new Mark(6, $student, $subjects[1], 7);
$marksStudent[] = new Mark(7, $student, $subjects[0], 8);
$marksStudent[] = new Mark(8, $student, $subjects[1], 8);
?>

<h1>Lista de notas de estudiantes</h1>
<table style="width: 100%; border-collapse: collapse">
    <thead>
        <tr>
            <th style="border: 1px solid; background-color: lightyellow">Id</th>
            <th style="border: 1px solid; background-color: lightyellow">Estudiante</th>
            <th style="border: 1px solid; background-color: lightyellow">Materia</th>
            <th style="border: 1px solid; background-color: lightyellow">Nota</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($marksStudent as $mark) { ?>
            <tr>
                <td style="border: 1px solid; text-align: center; background-color: lightyellow"><strong><?php echo $mark->getId(); ?></strong></td>
                <td style="border: 1px solid"><?php echo $mark->getStudent()->getName(); ?></td>
                <td style="border: 1px solid"><?php echo $mark->getSubject()->getName(); ?></td>
                <td style="border: 1px solid; text-align: center"><?php echo $mark->getValue(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
