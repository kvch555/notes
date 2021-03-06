<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


/***
====笔记部分====

public class PolyTest
{

	public static void main(String[] args)
	{
		Light light = new Light();
		RedGlass rg = new RedGlass();
		BlueGlass bg = new BlueGlass();
		
		light.ons(rg);
		light.ons(bg);  // I want to show blue light;
	}

}



class Light
{

	public void ons(RedGlass red)
	{
		red.display();
	}
}





class RedGlass
{

	public void display()
	{

		System.out.println("red light");
	}
}


class BlueGlass
{
	public void display()
	{
		System.out.println("BlueGlass");
	}
}



这样一段代码,在java中 编译通不过.
原因是:
	public void ons(RedGlass red)
	{
		red.display();
	}

    ons方法, 指定了 接收的参数必须是  RedGlass,即红玻璃对象
    因此,你传一个蓝光玻璃,不行!


强类型语言的一个特点,
函数参数,函数的返回值,都是定死的.

***/


/****
代码部分
****/







