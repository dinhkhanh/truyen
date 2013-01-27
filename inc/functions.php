<?php

//connect DB
function connect() {
	global $pdo;
	$pdo = new PDO("mysql:host=localhost;dbname=thichtruyen", "root", "dinhkhanh",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

function get_authors(){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT *
		FROM tacgia
		LIMIT 50
	');
	$stmt->execute();
	return $stmt->fetchAll( PDO::FETCH_OBJ );
}
function get_authors_by_name($letter){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * 
		FROM tacgia
		WHERE ten LIKE :letter
		LIMIT 50');

	$stmt->execute( array( ':letter' => $letter . '%' ) );

	return $stmt->fetchAll( PDO::FETCH_OBJ );
}

function get_author_post_count($author_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT COUNT(*) as post_count
		FROM truyen
		WHERE tg_id = :id
		LIMIT 1
		');
	$stmt->execute(array( ':id' => $author_id));
	return $stmt->fetch(PDO::FETCH_OBJ);
}
function get_author_by_id($author_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * FROM tacgia WHERE tg_id = :id
	');
	$stmt->execute(array( ':id' => $author_id));
	return $stmt->fetch(PDO::FETCH_OBJ);
}

function get_books(){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * 
		FROM truyen
		LIMIT 50
	');

	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function get_book_by_id ($book_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * FROM truyen WHERE truyen_id = :id
	');
	$stmt->execute(array( ':id' => $book_id));
	return $stmt->fetch(PDO::FETCH_OBJ);
}
function get_books_search ($letter, $tg_id, $loai_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * FROM truyen
		WHERE ten LIKE :letter AND tg_id LIKE :tg_id AND loai_id LIKE :loai_id
	');

	$stmt->execute(array(':letter'=> $letter . '%', ':tg_id' => $tg_id . '%', ':loai_id' => $loai_id . '%'));

	return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function get_categories (){
	global $pdo;

	$stmt = $pdo -> prepare ('
		SELECT * FROM loai
	');
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function get_category_post_count($cat_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT COUNT(*) as post_count
		FROM truyen
		WHERE loai_id = :id
		LIMIT 1
		');
	$stmt->execute(array( ':id' => $cat_id));
	return $stmt->fetch(PDO::FETCH_OBJ);
}
function get_category_by_id($cat_id){
	global $pdo;

	$stmt = $pdo->prepare('
		SELECT * FROM loai WHERE loai_id = :id
	');
	$stmt->execute(array( ':id' => $cat_id));
	return $stmt->fetch(PDO::FETCH_OBJ);
}
function register($username, $password) {
	global $pdo;

	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);

	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	$stmt = $pdo->prepare('
		INSERT INTO accounts(username, password) VALUES(:username, :password)
	');

	return $stmt->execute(array(':username' => $username, ':password' => md5($password)));
	
}
function login($username, $password) {
	global $pdo;
	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);

	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	$stmt = $pdo->prepare('
		SELECT COUNT(*) AS count FROM accounts 
		WHERE username = :username AND password = :password
	');

	$stmt->execute(array(':username' => $username, ':password' => md5($password)));

	return $stmt->fetch(PDO::FETCH_OBJ);
	
}

function update_truyen($truyen_id, $ten, $hinh, $excerpt, $link, $tg_id, $loai_id) {
	global $pdo;

	$stmt = $pdo->prepare ('
		UPDATE truyen 
		SET ten = :ten, 
			hinh = :hinh,
			excerpt = :excerpt,
			link = :link,
			tg_id = :tg_id,
			loai_id = :loai_id
		WHERE truyen.truyen_id = :truyen_id
		LIMIT 1
	');

	return $stmt -> execute(array(
			':ten' => $ten,
			':hinh' => $hinh,
			':excerpt' => $excerpt,
			':link' => $link,
			':tg_id' => $tg_id,
			':loai_id' => $loai_id,
			':truyen_id' => $truyen_id
		));
}
function add_truyen ($ten, $hinh, $excerpt, $link, $tg_id, $loai_id) {
	global $pdo;

	$stmt = $pdo->prepare ('
		INSERT INTO truyen(ten, hinh, excerpt, link, tg_id, loai_id)
		VALUES(:ten, :hinh, :excerpt, :link, :tg_id, :loai_id)
	');

	return $stmt -> execute(array(
			':ten' => $ten,
			':hinh' => $hinh,
			':excerpt' => $excerpt,
			':link' => $link,
			':tg_id' => $tg_id,
			':loai_id' => $loai_id
		));
}
function del_truyen($id) {
	global $pdo;

	$stmt = $pdo->prepare('
		DELETE FROM truyen
		WHERE truyen_id = :id
	');
	return $stmt->execute(array(':id' => $id));
}

function update_tacgia ($id, $ten, $hinh, $excerpt, $link){
	global $pdo;
	$stmt = $pdo->prepare('
		UPDATE tacgia
		SET ten = :ten,
			hinh = :hinh,
			excerpt = :excerpt,
			link = :link
		WHERE tacgia.tg_id = :id
		LIMIT 1
	');
	return $stmt->execute(array(':id'=>$id, ':ten'=>$ten, ':hinh'=>$hinh, ':excerpt' => $excerpt, ':link' => $link));
}

function add_tacgia ($ten, $hinh, $excerpt, $link) {
	global $pdo;

	$stmt = $pdo->prepare ('
		INSERT INTO tacgia(ten, hinh, excerpt, link)
		VALUES(:ten, :hinh, :excerpt, :link)
	');

	return $stmt -> execute(array(
			':ten' => $ten,
			':hinh' => $hinh,
			':excerpt' => $excerpt,
			':link' => $link
		));
}
function del_tacgia ($id) {
	global $pdo;

	$stmt = $pdo->prepare('
		DELETE FROM tacgia
		WHERE tg_id = :id
	');
	return $stmt->execute(array(':id' => $id));
}
function update_loai($id, $ten, $hinh, $excerpt) {
	global $pdo;

	$stmt = $pdo->prepare('
		UPDATE loai 
		SET ten = :ten,
			hinh = :hinh,
			excerpt = :excerpt
		WHERE loai_id = :id
		');
	return $stmt->execute(array(':id' => $id, ':ten' => $ten, ':hinh' => $hinh, ':excerpt' => $excerpt));
}
function add_loai ($ten, $hinh, $excerpt) {
	global $pdo;

	$stmt = $pdo->prepare ('
		INSERT INTO loai(ten, hinh, excerpt)
		VALUES(:ten, :hinh, :excerpt)
	');

	return $stmt -> execute(array(
			':ten' => $ten,
			':hinh' => $hinh,
			':excerpt' => $excerpt
		));
}
function del_loai ($id) {
	global $pdo;

	$stmt = $pdo->prepare('
		DELETE FROM loai
		WHERE loai_id = :id
	');
	return $stmt->execute(array(':id' => $id));
}