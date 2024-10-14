<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ内容</h1>
    <p><strong>お名前:</strong> {{ $contactData['name'] }}</p>
    <p><strong>メールアドレス:</strong> {{ $contactData['email'] }}</p>
    <p><strong>メッセージ:</strong> {{ $contactData['message'] }}</p>
</body>
</html>