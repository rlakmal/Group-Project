<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employer/jobpopup.css">
    <title>Document</title>
</head>

<body>
    <div class="popup-report">
        <form method="POST">
            <h2>Send Job Request</h2>
            <h4>Job Title : </h4>
            <input name="title" type="text" placeholder="Enter Tiltle of the Job">
            <h4>Budget : </h4>
            <input name="budget" type="text" placeholder="Enter your Budget">
            <h4>Location : </h4>
            <input name="city" type="text" placeholder="Select Location">
            <h4>Description : </h4>
            <input name="" type="text" placeholder="Enter your problem">
            <div class="btns">
                <button type="button" class="cancelR-btn" onclick="closeReport()">Cancel</button>
                <button name="requestWorker" type="button" class="close-btn" onclick="closeReport()">Submit</button>
            </div>
        </form>
    </div>
    <div id="overlay" class="overlay"></div>
</body>
<script src="<?= ROOT ?>/assets/js/employer/requestjob.js"></script>

</html>