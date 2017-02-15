#include <stdio.h>
/* 当fahr=0,20,..,300时，分别打印华氏温度与摄氏温度对照表 */
main()
{
    int fahr,celsius;
    int lower,upper,step;

    lower=0;   //温度表的下限
    upper=300;      //温度表的上限
    step=20;        // 步长

    fahr=lower;
    while(fahr<=upper){
        celsius=5*(fahr-32)/9;   //整数除法操作将执行舍位，结果中的任何小数部分都会被舍弃。
        printf("%3d\t%6d\n",fahr,celsius);  //%d指定一个整型参数， 3代表fahr的值占3个数字宽，celsius的值占6个数字宽
        fahr=fahr+step;
    }

}
