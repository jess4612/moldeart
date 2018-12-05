<?php
/**
 * Efetua Logout
 */
unset($_SESSION['userdata']);
unset($_SESSION['error']);
unset($_SESSION['msg']);
unset($_SESSION['artefato']);
header('Location: ' . INDEX);
