#include<stdio.h>
#include<string.h>


#define C1 1
#define C2 2
#define C3 3 
#define C4 4

float A,B,C,D,E,F,G;

int main(int argc, char const *argv[])
{
    printf("Donner les 3 notes de l'ecrit :");
    printf("\n");
    scanf("%f",&A);
    
    scanf("%f",&B);
    
    scanf("%f",&C);
    
    printf("Donner les 2 notes de l'oral :");
    printf("\n");
    scanf("%f",&D);
    
    scanf("%f",&E);
    F = (A*C4 + B*C3 + C*C1)/(C1+C2+C3);
    G = (D*C2 + E*C1)/(C2 + C1);
    printf("la moyenne de l'ecrit est : %f\n",F);
    printf("la moyenne de l'oral est : %f\n",G);
    printf("la moyenne general est egal a: %f",(F+G)/2);
    return 0;
}
