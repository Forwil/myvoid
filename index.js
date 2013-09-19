			function to2(i)
			{
				if (i<10)
				{
					return "0"+i;
				}
				else
				{
					return ""+i;
				}
			}

			function update()
			{
				var today= new Date();
				var hour=to2(today.getHours());
				var min=to2(today.getMinutes());
				var second=to2(today.getSeconds());
				document.getElementById("date").innerHTML=today.toLocaleDateString()+hour+":"+min+":"+second;
				setTimeout('update()',1000);
			}

			function check()
			{
					if (document.getElementById("text").value=="")
					{
						alert("输入空是什么意思？");
						return false;
					}
					return true;
			}

			function regcheck()
			{
				var pw1,pw2,un;
				pw1=document.getElementById("pw2").value;
				pw2=document.getElementById("pw1").value;
				un=document.getElementById("un").value
					if (pw1!=pw2)
						{
						alert("please input the same password");
						return false;
						}
					if (un.length<2)
						{
						alert("too short username!");
						return false;
						}
					if (pw1.length<2)
						{
						alert("too short password!");
						return false;
						}
					return true;
			}
			function delayjump()
			{
				alert("wait");
				setTimeout("window.self.location='/login.php'",2000);
			}
			function exit()
			{
				var d = new Date();
				d.setFullYear(d.getFullYear()-1);
				cookie.remove("user");
			}

			function play_onclick()
			{
				alert("Play");
				document.music.control.play;
			}
			function stop_onclick()
			{
				alert("Stop");
				document.music.control.stop;
			}
