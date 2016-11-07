public class Mem
{
	public static void main(String[] args)
	{
		Human lisi = new Human();
		lisi.test();
	}
}

class Human
{
	public int age = 20;

	public void test()
	{
		System.out.println(age);
		System.out.println(this.age);
	}
}

