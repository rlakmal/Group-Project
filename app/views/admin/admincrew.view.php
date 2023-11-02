<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style-bar.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/admin/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <?php include 'sidebar.php' ?>
    <!-- Navigation bar -->

    <?php include 'navigationbar.php' ?>
    <!-- Scripts -->
    <script src="<?= ROOT ?>/assets/js/script-bar.js"></script>

    <!-- content  -->
    <section id="main" class="main">

        <h2>Crew Members details</h2>

        <form>
            <div class="form">
                <input class="form-group" type="text" placeholder="Search...">
                <i class='bx bx-search icon'></i>
                <input class="btn" type="button" onclick="openReport()" value="New Registration">
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            </div>

        </form>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th class="ordId">Member ID</th>
                    <th class="stth">Name</th>
                    <th class="desc">Username</th>
                    <th></th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12345</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td class="edit-icon"><a onclick="openView()" href="#">
                            <i class="bx bxs-edit-alt"></i>
                            <span class="link_name"></span>
                        </a></td>
                    <td class="<?php if (0) {
                                    echo "is_active";
                                } else {
                                    echo "is_deactive";
                                } ?> ">
                        <p>A</p>
                    </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>67890</td>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td class="edit-icon"><a onclick="openView()" href="#">
                            <i class="bx bxs-edit-alt"></i>
                            <span class="link_name"></span>
                        </a></td>
                    <td class="is_active"></td>
                </tr>
                <!-- Add more rows with dummy data as needed -->
            </tbody>


        </table>


    </section>

    <div class="popup-report">
        <h2>New Crew Member Registration</h2>
        <h4> name : </h4>
        <input type="text" placeholder="Enter Member name">
        <h4>Username : </h4>
        <input type="text" placeholder="Enter Member email">
        <h4>Password : </h4>
        <input type="text" placeholder="Enter Member email">
        <div class="btns">
            <button type="button" class="cancelR-btn" onclick="closeReport()">Cancel</button>
            <button type="button" class="close-btn" onclick="closeReport()">Submit</button>
        </div>
    </div>

    <div class="popup-view">
        <h2>Update Crew Member</h2>
        <h4> name : </h4>
        <input type="text" placeholder="Enter Member name">
        <h4>Username : </h4>
        <input type="text" placeholder="Enter Member email">
        <h4>Password : </h4>
        <input type="text" placeholder="Enter Member email">
        <div class="btns">
            <button type="button" class="cancelR-btn" onclick="closeView()">Cancel</button>
            <button type="button" class="close-btn" onclick="closeView()">Submit</button>
        </div>
    </div>



    <div id="overlay" class="overlay"></div>




    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/customer/customer-orders.js"></script>
</body>

</html>