#include <stdio.h>
/* 当fahr=0,20,..,300时，分别打印华氏温度与摄氏温度对照表 */
main()
{
    float fahr,celsius;
    int lower,upper,step;

    lower=0;   //温度表的下限
    upper=300;      //温度表的上限
    step=20;        // 步长

    fahr=lower;
    while(fahr<=upper){
        celsius=(5.0/9.0)*(fahr-32.0);    //5.0/9.0是两个浮点数相除，结果将不被舍位。
        printf("%3.0f\t%6.1f\n",fahr,celsius);  //fahr占3个字符宽，且不带小数点和小数部分;%6.1f表明另一个待打印的数(celisius)至少占6个字符宽，且小数点后面有1位数字。
        fahr=fahr+step;
    }

}
