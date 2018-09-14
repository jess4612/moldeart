<?php
/**
 * Efetua Logout
 */
unset($_SESSION['userdata']);
unset($_SESSION['error']);
unset($_SESSION['msg']);
header('Location: ' . INDEX);
