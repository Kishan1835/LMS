// hello worlds
#include <iostream>
using namespace std;
bool present(int y[][3], int item, int l, int j)
{
    for (l = 0; l < 3; l++)
    {
        for (j = 0; j < 3; j++)
        {
            if (y[l][j] == item)
            {
                return 1;
            }
        }
    }
    return 0;
}
int main()
{

    int y[3][3];
    for (int i = 0; i < 3; i++)
    {
        for (int k = 0; k < 3; k++)
        {
            cout << "enter data" << endl;
            cin >> y[i][k];
        }
    }
    for (int i = 0; i < 3; i++)
    {
        for (int k = 0; k < 3; k++)
        {
            cout << y[i][k] << " ";
        }
        cout << endl;
    }
    int item;
    cout << "enter the item to be searched : " << endl;
    cin >> item;
    if (present(y, item, 3, 3))
    {
        cout << "item found : " << endl;
    }
    else
    {
        cout << "item does't exists in the array :" << endl;
    }
}
