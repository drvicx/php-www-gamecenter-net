<?php
include 'db_config.php';

#$id = $_POST['id'];
#$rating = $_POST['rating'];
#$title = $_POST['title'];
#$release_date = $_POST['release_date'];
#$link_info = $_POST['link_info'];
#$link_shop = $_POST['link_shop'];


//--READ all
$sql = $pdo->prepare("SELECT * FROM `games` order by rating, title");
$sql->execute();
$result = $sql->fetchAll();


//--UPDATE
//  !имена ключей массивов соответствуют значениям аттрибутов "name" в описании формы в "modal.php" (пример: name="edit_title")
$get_id = @$_GET['id'];
$edit_rating = @$_POST['edit_rating'];
$edit_title = @$_POST['edit_title'];
$edit_release_date = @$_POST['edit_release_date'];
$edit_link_info = @$_POST['edit_link_info'];
$edit_link_shop = @$_POST['edit_link_shop'];

if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE games SET rating=?, title=?, release_date=?, link_info=?, link_shop=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_rating, $edit_title, $edit_release_date, $edit_link_info, $edit_link_shop, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

//--CREATE
$rating = @$_POST['rating'];
$title = @$_POST['title'];
$release_date = @$_POST['release_date'];
$link_info = @$_POST['link_info'];
$link_shop = @$_POST['link_shop'];

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `games`(`rating`, `title`, `release_date`, `link_info`, `link_shop`) VALUES(?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$rating, $title, $release_date, $link_info, $link_shop]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}


//--DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM games WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
