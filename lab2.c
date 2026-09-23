// Stack Operation
#include <stdio.h>
#include <stdlib.h>
#define SIZE 10
int stk[SIZE];
int sp = -1;
// Function declarations
void push(int);
int pop();
void display();
int main()
{
int opt, item;
 do
{
printf("\nSTACK OPERATIONS\n");
printf("1. Push\n");
printf("2. Pop\n");
printf("3. Display\n");
printf("4. Exit\n");
printf("Your option: ");
scanf("%d", &opt);
switch (opt)
{
case 1:
printf("Enter item: ");
scanf("%d", &item);
push(item);
break;
case 2:
item = pop();
if (item != -1)
printf("Popped value = %d\n", item);
break;
case 3:
display();
break;
case 4:
exit(0);
default:
printf("Invalid option\n");
}
} while (1);
return 0;
}
// Function to push an item
void push(int x)
{
if (sp == SIZE - 1)
{
printf("Stack is full\n");
return;
}
else
{
stk[++sp] = x;
 }
}
// Function to pop an item
int pop()
{
if (sp == -1)
{
 printf("Empty stack...\n");
return -1;
 }
 else
{
sp--;
return stk[sp + 1];
}
}
// Function to display stack
void display()
{
int i;
 if (sp == -1)
{
printf("Stack is empty\n");
return;
}
printf("\nStack elements:\n");
for (i = sp; i >= 0; i--)
 {
 printf("%d\n", stk[i]);
    }
}

