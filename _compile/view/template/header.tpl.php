<?php /* Template_ 2.2.8 2018/10/11 16:30:41 D:\xampp\htdocs\_template\view\template\header.tpl 000001096 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- <?php if($TPL_VAR["title"]){?> -->
<title><?php echo $TPL_VAR["title"]?></title>
<!-- <?php }else{?> -->
<title>게시판</title>
<!-- <?php }?> -->
</head>
<body>
	
	<header class="header">
		<nav class="gnb">
			<ul class="menu">
				<li class="menu-list"><a href="/">메인</a></li>
				<li class="menu-list"><a href="/board/list">게시판</a></li>
				<!-- <?php if($TPL_VAR["member"]){?> -->
				<li class="menu-list"><?php echo $TPL_VAR["member"]['name']?></li>
				<li class="menu-list"><a href="/member/logout">로그아웃</a></li>
				<!-- <?php }else{?> -->
				<li class="menu-list"><a href="/member/join">회원가입</a></li>
				<li class="menu-list"><a href="/member/login">로그인</a></li>
				<!-- <?php }?> -->
			</ul>
		</nav>
	</header>