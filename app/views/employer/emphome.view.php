<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employer/emphome.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/employer/jobPost.css">
    <title>Document</title>
</head>

<body>

    <?php include 'employernav.php' ?>
    <?php include 'empfilter.php' ?>
    <div class="set-margin" id="set-marginid">
        <?php
        if (is_array($data)) {
            foreach ($data as $item) {
                // show($item);
                // තණකොළ කැපීමට සේවකයෙකු අවශ්‍යයි

                date_default_timezone_set('Asia/Kolkata');

                $date1 = new DateTime($item->created);
                $date2 = new DateTime();

                // Calculate the difference between the dates
                $interval = $date1->diff($date2);

                $days_difference = $interval->days;
                $hours_difference = $interval->h;
                $minutes_difference = $interval->i;
                $seconds_difference = $interval->s;


                if ($days_difference > 0) {
                    $times_ago = $days_difference . " days ago";
                } elseif ($hours_difference > 0) {
                    $times_ago = $hours_difference . " hours ago";
                } elseif ($minutes_difference > 0) {
                    $times_ago = $minutes_difference . " minutes ago";
                } elseif ($seconds_difference > 0) {
                    $times_ago = $seconds_difference . " seconds ago";
                } elseif ($seconds_difference == 0) {
                    $times_ago = " Just Now";
                }

                // echo $times_ago;;
        ?>
                <div class="post-container">
                    <div class="profile-container2">
                        <div class="picture">
                            <img class="image" src="<?= ROOT ?>/assets/images/employer/profile.jpg" alt="">
                        </div>
                        <div class="index">
                            <div class="profile-name"><?php echo "Dasun" ?></div>
                            <div class="profile-ratings"><?php echo $times_ago ?></div>
                            <div class="profile-type"><?php echo $item->jobTitle ?></div>
                            <div class="budget">RS <?php echo $item->budget ?>/= per day</div>
                            <div class="location"><?php echo $item->city ?></div>

                        </div>
                        <a><button class="view-profile-button">Request</button></a>
                        <!-- <a></a><button class="edit-profile-button">Edit</button></a> -->

                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>