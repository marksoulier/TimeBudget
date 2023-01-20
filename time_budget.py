
import typing
import os

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

def addHours(Budget, hours: float, number: int):
    Budget[number][1] = hours
    return Budget, number

def addHoursWithPriority(Budget, priority, hours, number):
    for item in Budget:
        if item[0] == priority:
            item[1] = hours
            return Budget, number
    print("Sorry please enter a valid activity")
    return Budget, (number-1)


def main():
    hours_in_week = 168
    exit = 0
    Budget = []
    addPriority(Budget, "sleep")
    #make a list of your priorites
    os.system('cls')
    while exit == 0:
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("List out ALL activites you spend your time doing in a week")
        print("Try to list around 10-20 activities")
        print("Examples: (sleep, cooking, school, relaxing, hanging out with freinds, traveling)")
        print("Type \"done\" when done\n")
        print("Current list of activities: ")
        for item in Budget:
            print(item[0])
        print("")
        priority = input("Activity: ")
        os.system('cls')
        print("")
        if priority == 'done':
            exit = 1
        else:
            Budget = addPriority(Budget, priority)
    exit = 0
    priority = ""
    #arrage your priorities
    number = 0
    print("")
    while number < len(Budget):
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("Now if your schedule was full of activities in the current activities list which single one would you do")
        print("list of activities: ")
        for i in range(number, len(Budget)):
            print(Budget[i][0])
        print("")
        print("Current priorities: ")
        for i in range(number):
            print(Budget[i][0])
        print("")
        priority = input("Activity: ")
        os.system('cls')
        Budget, number = changeOrder(Budget, priority, number)
        print("")
        number += 1
    addPriority(Budget, "Other")
    #add hours to each priority
    number = 0
    print("")
    while number < len(Budget):
        hours_left = hours_in_week
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("Time Bank\n")
        print("Current balance: ")
        for item in Budget:
            print(item[0], "\t", item[1])
            hours_left -= item[1]
        print("")
        print("Time Remaining:", "\t", hours_left )
        hours = int(input(Budget[number][0] + ": "))
        os.system('cls')
        Budget, number = addHours(Budget, hours, number)
        print("")
        number += 1
    number = 0
    exit = 0
    while exit == 0:
        hours_left = hours_in_week
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("Time Bank\n")
        print("Current balance: ")
        for item in Budget:
            print(item[0], "\t", item[1])
            hours_left -= item[1]
        print("")
        print("Time Remaining:", "\t", hours_left, "\n" )
        print("Purpose: Inspire other to use and spend time wisely to help them reach a dream filled and fulfilling life")
        priority, hours = input("Enter in activity and changed hours:").split()
        hours = int(hours)
        os.system('cls')
        Budget, number = addHoursWithPriority(Budget, priority, hours, number)
        print("")
        number += 1


if __name__ == "__main__":
    main()