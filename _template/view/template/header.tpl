<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- {? title} -->
<title>{title}</title>
<!-- {: } -->
<title>게시판</title>
<!-- {/} -->
</head>
<body>
	
	<header class="header">
		<nav class="gnb">
			<ul class="menu">
				<li class="menu-list"><a href="/">메인</a></li>
				<li class="menu-list"><a href="/board/list">게시판</a></li>
				<!-- {? member} -->
				<li class="menu-list">{member['name']}</li>
				<li class="menu-list"><a href="/member/logout">로그아웃</a></li>
				<!-- {: } -->
				<li class="menu-list"><a href="/member/join">회원가입</a></li>
				<li class="menu-list"><a href="/member/login">로그인</a></li>
				<!-- {/} -->
			</ul>
		</nav>
	</header>

	