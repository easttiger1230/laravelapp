<?php
class jissyu3_1Controller extends Controller

public function index()
{
$data = [
'msg'=>'必要事項を入力してください。',
];
return view('jissyuu3', $data);
}

public function post(___(6)___)
{
$msg = $request->msg;
$data = [
'msg'=>'こんにちは、' . $msg . 'さん！',
];
return view('___(7)___', $data);
}
