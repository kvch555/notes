#include <stdio.h>
/* ��fahr=0,20,..,300ʱ���ֱ��ӡ�����¶��������¶ȶ��ձ� */
main()
{
    int fahr,celsius;
    int lower,upper,step;

    lower=0;   //�¶ȱ������
    upper=300;      //�¶ȱ������
    step=20;        // ����

    fahr=lower;
    while(fahr<=upper){
        celsius=5*(fahr-32)/9;   //��������������ִ����λ������е��κ�С�����ֶ��ᱻ������
        printf("%3d\t%6d\n",fahr,celsius);  //%dָ��һ�����Ͳ����� 3����fahr��ֵռ3�����ֿ�celsius��ֵռ6�����ֿ�
        fahr=fahr+step;
    }

}
