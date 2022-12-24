#include <stdio.h>
#include <stdlib.h>
struct stu
{
    char name[30];
    int roll;
    float total;
    float total_percentage;
};
int main()
{
    struct stu num;
    int subject;
    int i;
    printf("enter number of  :");
    scanf("%d", &subject);

    printf("getting the details of the students.... \n");

    printf("enter name of the student : ");
    scanf("%s", &num.name);
    printf("enter the roll_number : ");
    scanf("%d", &num.roll);

    float marks[subject];
    printf("getting Marks of the students...\n");

    for (i = 0; i < subject; i++)
    {
        printf("enter Marks of the students..\n ");
        scanf("%f", &marks[i]);
    }
    num.total = 0;
    for (int i = 0; i < subject; i++)
    {
        num.total = num.total + marks[i];
        num.total_percentage = (num.total / (subject * 100)) * 100;
    }
    printf("Displaying result of the student...\n");
    printf("student name ->%s\n", num.name);
    printf("student rol_number ->%d\n", num.roll);
    printf("student total marks ->%f\n", num.total);
    printf("student total percentage ->%f\n", num.total_percentage);
}
