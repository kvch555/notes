#include <stdio.h>
/* ��fahr=0,20,..,300ʱ���ֱ��ӡ�����¶��������¶ȶ��ձ� */
main()
{
    float fahr,celsius;
    int lower,upper,step;

    lower=0;   //�¶ȱ������
    upper=300;      //�¶ȱ������
    step=20;        // ����

    fahr=lower;
    while(fahr<=upper){
        celsius=(5.0/9.0)*(fahr-32.0);    //5.0/9.0����������������������������λ��
        printf("%3.0f\t%6.1f\n",fahr,celsius);  //fahrռ3���ַ����Ҳ���С�����С������;%6.1f������һ������ӡ����(celisius)����ռ6���ַ�����С���������1λ���֡�
        fahr=fahr+step;
    }

}
