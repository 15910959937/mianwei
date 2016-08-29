<form action="info" method="post" >
<div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="username" placeholder="请输入姓名">
</div>
<div>
    <input type="password" name="password" placeholder="密码">
</div>
    <div><a href="info">体积哦啊</a></div>
<div>
    <input type="submit" value="提交" >
</div>
</form>