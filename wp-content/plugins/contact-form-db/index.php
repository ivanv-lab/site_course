<?php
/* Plugin name: Contact Form DB
Author: Иван Иванов */
add_action('wpcf7_before_send_mail','VladimirCity_before_send_mail');
add_action('admin_menu','VladimirCity_add_menu_page');
add_action('admin_enqueue_scripts','VladimirCity_admin_style');

function VladimirCity_admin_style()
{
wp_register_style('bootstrap', plugin_dir_url(__FILE__).'css/bootstrap.min.css');
wp_enqueue_style('bootstrap');
}
function VladimirCity_add_menu_page()
{
add_menu_page('Заявки на запись','Заявки на запись','manage_options', 'forms', 
'VladimirCity_forms_menu_page');
}
function VladimirCity_before_send_mail()
{
global $wpdb; // получение доступа к переменной WP для взаимдействия с БД
// получение полей формы
$form = WPCF7_Submission::get_instance();
$data = $form -> get_posted_data();
// необязательное объявление переменных
$fullname = '';
$email = '';
$tel = '';
$subject = '';
$message = '';
//разбор полей формы из переменной $data и запись полей в переменные
foreach($data as $key => $value)
{
if ($key !== '_wpcf7' && $key !== '_wpcf7_version' && $key !== '_wpcf7_locale' 
&& $key !== '_wpcf7_unit_tag' && $key !== '_wpcf7_container_post')
{
if ($key === 'fullname') {
$fullname = $value;
} else if ($key === 'email') {
$email = $value;
} else if ($key === 'tel') {
$tel = $value;
} else if ($key === 'subject') {
$subject = $value;
} else if ($key === 'message') {
$message = $value;
}
}
}
// сохранение полей в БД
$wpdb -> insert('contact_form', array(
'form_fullname' => $fullname,
'form_email' => $email,
'form_tel' => $tel,
'form_subject' => $subject,
'form_message' => $message));
}
function VladimirCity_forms_menu_page()
{
global $wpdb;
$fid = $_GET['fid']; // получение id формы
$action = $_GET['action']; // получение действия
// если действие - удаление
if ($fid && $action === 'delete')
{
$wpdb -> get_results("DELETE FROM contact_form WHERE form_id = $fid"); // удаление формы из базы данных
$forms = $wpdb -> get_results('SELECT * FROM contact_form ORDER BY form_id 
DESC'); // получение всех форм из базы данных
echo '<div class = "list-group mt-3">'; // создание разметки
foreach ($forms as $key => $value)
{
echo "<a class='list-group-item list-group-item-action' 
href='admin.php?page=forms&fid=$value->form_id'>Заявка $value->form_id</a>";
}
echo '</div>';
}
else if ($fid)
{
// если просмотр формы
$response = $wpdb -> get_results("SELECT * FROM contact_form WHERE form_id = 
$fid"); // получение всех форм из базы данных
echo '<div class="card">'; // создание разметки
echo '<h3>';
echo 'Заявка '. $response[0]->form_id;
echo '</h3>';
echo 'ФИО: ' . $response[0]->form_fullname . '<br>';
echo 'Электронная почта: ' . $response[0]->form_email . '<br>';
echo 'Телефон: ' . $response[0]->form_tel . '<br>';
echo 'Тема сообщения: ' . $response[0]->form_subject . '<br>';
echo 'Сообщение: ' . $response[0]->form_message . '<br>';
echo "<a class='btn btn-danger text-light mt-3' 
href='admin.php?page=forms&fid=$fid&action=delete'>Удалить</a>"; // кнопка удаления формы
echo '</div>';
}
else
{ 
// если открыта страница всех форм
$forms = $wpdb -> get_results('SELECT * FROM contact_form ORDER BY form_id 
DESC'); // получение всех форм из базы данных
echo '<div class="list-group mt-3">'; // создание разметки
foreach ($forms as $key => $value)
{
echo "<a class='list-group-item list-group-item-action' 
href='admin.php?page=forms&fid=$value->form_id'>Заявка $value->form_id</a>";
}
echo '</div>';
}
}
?>