<div class="landing-page">
    <div class="profile-page">
        <h2> WELCOME <?php echo $current_user['user_firstname'] . ' ' . $current_user['user_lastname'] ?></h2>
        <h3> Your Registered email is <?php echo $current_user['user_email'] ?></h3>
        <?php if ($is_admin) { ?>
            <button type="button" id="show-admin-page">Show All Users</button>
        <?php } ?>
    </div>
    <?php if ($is_admin) { ?>
        <div class="admin-page hidden">
            <h2>All Users</h2>
            <table>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($all_users as $key => $user) { ?>
                    <tr>
                        <td><?php echo $user['user_firstname'] ?> <?php echo $user['user_lastname'] ?></td>
                        <td><?php echo $user['user_email'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <button type="button" id="hide-admin-page">Hide All Users</button>
        </div>
    <?php } ?>
</div>
