<h2>Up Coming Model Test Routine</h2>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Subject</th>
            <th scope="col">Paper</th>
            <th scope="col">Chapter / Topic</th>
            <th scope="col">Number</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
<?php 
$data = apply_filters('Ruinfo_get_model_test_routine_info', 'COLLECT ALL ROUTINE DATA');
foreach ($data as $routineTitle => $routineValue) { ?>    
            <tr>
                <td><?php echo $routineValue->subjectName; ?></td>
                <td><?php echo $routineValue->subjectPaper; ?></td>
                <td><?php echo $routineValue->topic_chapterName; ?></td>
                <td><?php echo $routineValue->TotalMarks; ?></td>
                <td><?php echo $routineValue->examDate; ?></td>
                <td><?php echo $routineValue->examTime; ?></td>
            </tr>
<?php } ?>            

        </tbody>
    </table>
</div>