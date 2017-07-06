<?php
$access_token = 'X1Mr/EejQy/ZI+rXbZQFG5uUs+j/dkaRw9fRw58T/zq2kFRe/T8KE3PyHPq2xShBs5FXZd/euK8AUOksUQdCy5KRtw0MNhpwDRAf1rbB8VPk3TeTgeK4MCV5NSwFZRTcrLul/XAgdup/Tdn1J9PKPAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back

			
			if ($text == 'สวัสดี' || $text == 'หวัดดี') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'สวัสดีครับผมมม'
					'text' => 'ชื่ออะไรครับ'
					];
			}elseif ($text == 'ดี') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'good'
					];
			}elseif ($text == 'โง่') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ขอโทดได้เป่าาา'
					];
			}elseif ($text == 'ใครวะ' || $text == 'ใคร' || $text == 'ใครอะ' || $text == 'ใครอ่ะ') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ไม่บอกอย่าหลอกถาม'
					];

			}elseif ($text == 'ยุ่ง') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'เป็นสัตว์กินเลือด'
					];
			}elseif ($text == 'เปล') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'เรื่องของเรามันจบไปแล้ว อย่ารื้อฟื้นเลยดีกว่า'
					];
			}elseif ($text == 'โป' || $text == 'โปลิส' || $text == 'โปลิศ') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'หรือเรียกอีกชื่อว่าโย'
					];
			}elseif ($text == 'โด' || $text == 'โดนัท') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'หรือเรียกเค้าว่าโดจิโรเบ้ก็ได้'
					];
			}elseif ($text == 'เต้ย') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'โนบิตะะะะ (เสียงแม่โนบิตะในการ์ตูน)'
					];
			}elseif ($text == 'เอฟ') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'เห้ อีลิงโง่ เพื่อนเรียกแล้ว'
					];
			}elseif ($text == 'กานติ') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ตอนนี้อยู่อังกฤษกินขนมจนอ้วนไปแล้ว'
					];
			}elseif ($text == 'ส้ม') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ไอ้ส้มมมมมม เพื่อนเรียกแล้วชิบหายยยย ตอบดิ'
					];
			}elseif ($text == 'เพียช' || $text == 'เพียส') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => '1 ในแก๊งเสียงใสที่เพื่อนๆถามหา'
					];
			}elseif ($text == 'นรา' || $text == 'นราธิป') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ช่วงนี้เค้าคุยกับน้องพราวอยู่'
					];
			}elseif ($text == 'เอ็ม') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'คนเหงา 2017 ผู้ให้กำเนิดผมขึ้นมา ตบมือดิสัสรออะไร !!'
					];
			}elseif ($text == 'เติ้ง') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'สิรวิชญ์ตัวปลอม เพื่อนเรียกแล้ว'
					];
			}else{
				
			}

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";