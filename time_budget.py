
import typing

def changeOrder(Budget, priority: str, number: int):
    for item in Budget:
        if item[0] == priority:
            Budget.remove(item)
            Budget.insert(number, item)
            return Budget, number
    print("Sorry please enter a valid activity")
    return Budget, (number-1)

def addPriority(Budget, priority: str):
    Budget.append([priority, 0])
    return Budget


def main():
    hours_in_week = 168
    exit = 0
    Budget = []
    addPriority(Budget, "Sleep")
    addPriority(Budget, "Other")
    #make a list of your priorites
    print("List out ALL activites you spend your time doing in a week")
    print("Examples: Sleep, Cooking, School, Relaxing, Hanging out with freinds")
    print("Type 0 to exit\n")
    while exit == 0:
        print("current list of activities: ")
        for item in Budget:
            print(item[0])
        print("")
        priority = input("Activity: ")
        print("")
        if priority == '0':
            exit = 1
        Budget = addPriority(Budget, priority)

    #arrage your priorities
    number = 0
    print("Hello")
    while True:
        priority = input("Activity: ")

        Budget, number = changeOrder(Budget, priority, number)
        number += 1
        print(Budget)


    #add hours to each priority
    # while True:
    #     print(Budget)


if __name__ == "__main__":
    main()