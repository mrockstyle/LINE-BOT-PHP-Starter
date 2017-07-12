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
				$a = ['สวัสดีครับผมมมม','สวัสดีจ้า','สวัสดีฮับ','คอนนิจิวะะะะ~~~', 'สวัสดีชาวโลก', 'ก่อนสวัสดีผม สวัสดีคุณพ่อคุณแม่รึยัง'];
				$messages = getMessage($a);		
			}elseif ($text == 'ดี') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'good'
					];
			}elseif ($text == 'ลาเต้') {
				# code...
				$a = ['จ๋าาา', 'ว่าไงฮะ', 'นั่นใครเรียกหนะ', 'ว่า', 'เรียกแล้วชวนคุยด้วยนะ เดี๋ยวเหงา','เรียกเราหรืออยากกินกาแฟลาเต้ โฮ่ง'];
				$messages = getMessage($a);
			}elseif ($text == 'ใช่มั้ยลาเต้') {
				# code...
				$a = ['ถูกต้องที่สุด', 'ถูกต้องนะคร้าบบบ', 'นั่นแหละฮะท่านผู้ชม', 'ถูกลูกกก', 'Yep', 'ใช่ที่สุด','โฮ่ง!!!'];
				$messages = getMessage($a);
			}elseif ($text == 'โง่') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'ขอโทดได้เป่าาา'
					];
			}elseif ($text == 'ใครวะ' || $text == 'ใคร' || $text == 'ใครอะ' || $text == 'ใครอ่ะ') {
				# code...
				$a = ["I'm Batman !!!", 'ลาเต้เองงง', 'กูลาเต้ไอ้สัส!!! กำ...หยาบไป ขอโทดฮับ', 'ยูแคนคอลมี ลาเต้', 'ผมชื่อลาเต้ฮะ'];
				$messages = getMessage($a);

			}elseif ($text == 'ยุ่ง') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'เป็นสัตว์กินเลือด'
					];
			}elseif ($text == 'ไป') {
				# code...
				$a = ['ไปด้วยดิ', 'ไปด้วยยยยย', 'go go', 'ไปด้วยได้ป่ะ', 'ไป', 'ถ้าตรงข้ามไป ก็คือมา จะเป็นไปๆมาๆ', 'ที่คล้ายๆบุหรี่'];
				$messages = getMessage($a);
			}elseif ($text == 'เปล') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'อย่าตอกย้ำเจ้านายผมนะ :('
					];
			}elseif ($text == 'โป' || $text == 'โปลิส' || $text == 'โปลิศ') {
				# code...
				$a = ['เพื่อนเรียกทำไมไม่ตอบ งงใจ', 'โป เพื่อนเรียกอ่ะ', 'คนนี้เค้าเด็กนิติ พูดจาอะไรระวังกันหน่อยนะ', 'อยุธยากุ้งเผาอร่อยดี', 'มุ่ย มุ่ย มุ่ย มุ่ย มุ่ย มุ่ย มุ่ย มุ่ย มุ่ย'];
				$messages = getMessage($a);
			}elseif ($text == 'โด' || $text == 'โดนัท') {
				# code...
				$a = ['หรือเรียกเค้าว่าโดจิโรเบ้ก็ได้','โดมินิค ทอเร็ตโต้', 'โดหนาดดดดดดด', 'เพื่อนเรียกอะโด', 'โดๆๆๆกาฟรื้อ!! เดซิโก๊ะเดจินาโบ กะโด กาโด กาโด ผมนี่ลุกขึ้นเต้นเลยครับ'];
				$messages = getMessage($a);
			}elseif ($text == 'เต้ย') {
				# code...
				$a = ['ลูกจารสุ เพื่อนเรียกแล้ว', 'เดี๋ยวนี้เขาเทเพื่อนเหมือนนราธิปเลย ตอบเพื่อนสิตอบเพื่อน !!', 'เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์ เต้ยทิพย์'];
				$messages = getMessage($a);
			}elseif ($text == 'เอฟ') {
				# code...
				$a = ['ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ ไอ้ควายเอฟ', 'เพื่อนถามหา อ่านข้อความเพื่อนบ้างอย่าอ่านแต่ user', 'ในหนังเรื่อง Kong Skull Island ใช่เอฟรึเปล่า', 'ชื่อนี้ไม่อยากได้ใน transcript เลย', 'ใครไม่เอฟแต่นราธิปเอฟฟิสิกส์'];
				$messages = getMessage($a);
			}elseif ($text == 'กานติ') {
				$a = ['ชอบอุทานว่า hee ไม่ดีเลย not good', 'เพื่อนเรียกอะไม่ได้ยินเหรอ', 'ฮัลโหล เพื่อนเรียกเห้ย', 'มีหมาชื่อปลาหมึก อยากเป็นเพื่อนด้วยจัง', 'เพื่อนเรียกแล้วจะเฉยชาไปไย','ตอนนี้อยู่อังกฤษ กินจนอ้วนไปแล้ว'];

				# code...
				$messages = getMessage($a);
			}elseif ($text == 'ส้ม') {
				# code...
				$a = ['แอปเปิ้ล มะละกอ กล้วย ส้ม', 'ขอซื้อบ้านได้ไหม อยากว่ายน้ำ', 'ส้มจี๊ดดดดดด สิริมาาาาาา', 'ฮัลโหลลล ส้ม เพื่อนเรียก', 'sommmmmmjeeeeezzzzz hello','ไอ้ส้มมมมมม เพื่อนเรียกแล้วชิบหายยยย ตอบดิ'];
				$messages = getMessage($a);
			}elseif ($text == 'เพียช' || $text == 'เพียส') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => '1 ในแก๊งเสียงใสที่เพื่อนๆถามหา'
					];
			}elseif ($text == 'นรา' || $text == 'นราธิป') {
				# code...
				$a = ['ติดสาว', 'แม่ทำกับข้าวไว้แล้วแน่ๆ เลยไม่มาตอบ', 'นราธิป เพื่อนเรียกแล้ว', 'ฮัลโหล นราธิป', 'เค้าไม่ตอบหรอกถ้าไม่ใช่สาวสวยพิมพ์ไปหา', 'นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว นุ๊กพราว'];

				$messages = getMessage($a);
			}elseif ($text == 'เอ็ม') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'คนเหงา 2017 ผู้ให้กำเนิดผมขึ้นมา ตบมือดิสัสรออะไร !!'
					];
			}elseif ($text == 'เติ้ง') {
				# code...
				$a = ['เค้าเคยชื่อว่าเติ้งโอนะเบนิส', 'hello เจ้าสิรวิชญ์ตัวปลอม', 'ไอ้เติ้ง เพื่อนเรียกทำไมไม่ตอบ', 'ขณะนี้เค้าได้ออกจากโรงบาลแล้วนะฮะ', 'ทำไมเติ้งไม่ตอบอะ งงใจ', 'เติ้งออย เติ้งออย เติ้งออย เติ้งออย เติ้งออย'];

				$messages = getMessage($a);
			}elseif ($text == 'การ์ด') {
				# code...
				$messages = [
					'type' => 'text',
					'text' => 'เชี่ยอ้วน ไม่เคยตอบเพื่อนเลย ฮัลโหล อยู่ในกลุ่มมั้ยมึงอ่ะ'];
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
function getMessage($a) {
		$message = [
		'type' => 'text',
		'text' => randTest($a)
	];
	return $message;
}
function randTest($a) {
	$ranKey = array_rand($a,1);
	return $a[$ranKey];
}
echo "OK";