#include <stdio.h>

#define IN 1
#define OUT 0

//统计输入的行数，单词数与字符数
main()
{
    int c,n1,nw,nc,state;

    state=OUT;

    n1=nw=nc=0;  //nc是输入字符数，nw是单词数，n1是输入行数

    while((c=getchar())!=EOF){
        ++nc;
        if(c=='\n'){
            ++n1;
        }

        if(c==' '||c=='\n'||c=='\t'){
            state=OUT;
        }else if(state==OUT){
            state=IN;
            ++nw;
        }
    }
    printf("%d%d%d\n",n1,nw,nc);
}
