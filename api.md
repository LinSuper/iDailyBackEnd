post方法的params采用json方式

get方法的params放在url中，比如?username=vincent&password=123456

##User

####用户注册

	request	:	POST		/user/register
	
	params	:	{username,password}
	
	success	:	{code : 200 , msg : 注册成功 }
	
	error	:	{code : 401 , msg : 用户名已存在}
    
    
####用户登录

	request	:	POST		/user/login
	
	params	:	{username,password}
	
	success	:	{code : 200 , msg : 登陆成功 , data : {token}}
	
	error	:	{code : 401 , msg : 用户名或密码错误}
    
####用户注销

	request	:	GET		/user/logout
	
	params	:	{token}
	
	success	:	{code : 200 , msg : 注销成功 }
	
	error	:	{code : 401 , msg : 无效token}
    
####修改头像

	request	:	POST	/user/updataAvator
	
	params	:	{token,imgUrl}
	
	success	:	{code : 200 , msg : 修改头像成功 }
	
	error	:	{code : 401 , msg : 无效token}

##POST（一条状态）

####发表新状态

	request	:	POST		/post/newPost
	
	params	:	{content,imageList:[url1,url2],token}
	
	success	:	{code : 200 , msg : 发表成功 }
	
	error	:	{code : 401 , msg : 无效token}

####获取状态列表

	request	:	GET		/post/getAll
	
	params	:	{}
	
	success	:	{code : 200 , msg : 注册成功 , data:{[0:{postId,userId,userAvatorUrl,content,imageList:[url1,url2]}],likeList:[0:{userId,userAvatorUrl},1:{userId,userAvatorUrl}]}}
    
    
####根据用户id获取状态列表

	request	:	GET		/post/getPostByUserId
	
	params	:	{UserId}
	
	success	:	{code : 200 , msg : 注册成功 ,data:{[0:{postId,content,imageList:[url1,url2]}],likeList:[0:{userId,userAvatorUrl},1:{userId,userAvatorUrl}]}}
    
    
####点赞

	request	:	GET		/post/like
	
	params	:	{postId,token}
	
	success	:	{code : 200 , msg : 点赞成功 }
	
	error	:	{code : 401 , msg : 无效token}
