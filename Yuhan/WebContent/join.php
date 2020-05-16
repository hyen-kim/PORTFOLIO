<?php
  // 가입경로를 담아놓을 배열
  $wheres_array = Array("친구소개","검색엔진","신문광고","커뮤니티 사이트", "기타");
  $wheres = ""; // 가입경로를 담아야하므로 초기화

  // 성별
  $gender_value = $gender == "woman" ? "여자" : "남자" ;

  // 직업
  if($education == "elementary"){
      $education_value = "초등학생";
  }else if($education == "middle"){
      $education_value = "중학생";
  }else if($education == "high"){
      $education_value = "고등학생";
  }else {
    $education_value = "대학생";
  }

  // 학력
  if($job == "front"){
      $job_value = "프론트엔드";
  }else if($job == "back"){
      $job_value = "백엔드";
  }else {
    $job_value = "그 외";
  }

   // 핸드폰 번호 저장
  $phonenumber = $ph1."-".$ph2."-".$ph3;
  // 핸드폰 인증
  $phocheck = $ph4 == "" ? "인증실패" : "인증완료" ;
  // 생년월일 저장
  $birthday = $year."년 ".$month."월 ".$days."일";
  // 메일 수신 여부
  $mail = $mailcheck == "yes"  ? "동의" : "비동의";


  // 가입경로
  for ($i=0; $i <= 4 ; $i++) {
    if ($where.($i+1)) {
    	if ($wheres=="")	$wheres = $wheres_array[i];
    	else $wheres = $wheres." ,".$wheres_array[i];
    }
  }


?>


<html>
<head>
<meta charset="UTF-8">
<title>Yuhan Join check</title>
<link rel="stylesheet" type="text/css" href="joinstyle.css">
</head>
<body>
	<h2 class="join1">회원가입 결과</h2>
		<table class="jointable" border="1" align="center" cellspacing="0" width="650">
			<tr>

        <!-- 아이디 값 확인 -->
				<th height="50px">아이디</th>
				<td><?php echo $id ?></td>
			</tr>

			<!-- 비밀번호 값 확인 -->
			<tr>
				<th height="50px">비밀번호</th>
				<td><?php echo $pw1?></td>
			</tr>

			<!-- 이름 값 확인 -->
			<tr>
				<th height="50px">이름</th>
				<td><?php echo $name ?></td>
			</tr>

			<!-- 성별  : radio -->
			<tr>
				<th height="50px">성별</font>
				<td><?php echo $gender_value ?></td>
			</tr>

			<!-- 직업 : radio  -->
			<tr>
				<th height="50px">직업</th>
				<td><?php echo $job_value ?></td>
			</tr>

			<!-- 학력 : radio -->
			<tr>
				<th height="50px">학력</th>
				<td><?php echo $education_value ?>
				</td>
			</tr>

			<!-- 핸드폰 번호  -->
			<tr>
				<th height="50px">핸드폰번호</th>
				<td><?php echo $phonenumber ?></td>
			</tr>


			<!-- 인증번호 -->
			<tr>
				<th height="50px">인증번호</th>
				<td><?php echo $phocheck ?></td>
			</tr>

			<!-- 생년월일 -->
			<tr>
				<th height="50px">생년월일</th>
				<td><?php echo $birthday ?></td>
			</tr>


			<!-- 가입경로  -->
			<tr>
				<th height="50px">가입경로</th>
				<td><?php echo $wheres ?></td>
			</tr>


			<!-- 이메일 -->
			<tr>
				<th height="50px">이메일</th>
				<td><?php echo $email ?> @ yuhan.ac.kr </td>
			</tr>

			<!-- 메일 수신 : radio  -->
			<tr>
				<th height="50px">메일수신</th>
				<td><?php echo $mail ?></td>
			</tr>

			<!-- 가입 동기 -->
			<tr>
				<th height="50px">가입동기</th>
				<td><?php echo $say ?></td>
			</tr>

		</table>


</body>
</html>
