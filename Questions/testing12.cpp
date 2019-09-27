#include<iostream>
#include<string>
#include<math.h>
using namespace std;

int main() {
    string test="terrace";
    int lenhalf = floor(test.size()/2);
    int counter = 1;
    for(int i=0;test[i]!='\0';i++){
        if(i<lenhalf){
            test[i]+=counter;
            counter++;
        } else if(i==lenhalf){
            counter=-1*lenhalf;
            test[i]+=counter;
        } else if(i>lenhalf){
            counter+=1;
            test[i]+=counter;
            if(counter==-1){
                counter = 1;
            }

        }
    }
    cout<<test;
    return(0);
}