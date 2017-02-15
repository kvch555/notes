#include <stdio.h>
//统计输入中的行数
main()
{
    int c,n1;

    n1=0;

    while((c=getchar())!= EOF){
        if(c=='\n'){
            ++n1;
            printf("%d\n",n1);
        }

    }

}
