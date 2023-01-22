
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
    print("WELCOME TO TIME-BUDGET.COM \n")
    print("Purpose: Inspire other to use and spend time wisely to help them reach a dream filled and fulfilling life\n")
    print("For this example software that I built, I would like you to be completly honest and intentional in reflection of your own life.\n")
    print("In this sim you will be taken through a few steps in creating your own time budget\n")
    blank = input("Press Enter to continue....")
    os.system('cls')
    while exit == 0:
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("List out ALL activites you spend your time doing in a week")
        print("Examples: (sleep, cooking, school, relaxing, hanging out with freinds, traveling, movie watching, commuting to work)")
        print("Also include goals you have ie.(learn the guitar, cook gourmet)")
        print("review your calander to ensure there is no activity you missed")
        print("Try to place these activities into around 15-20 catagories")
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
        print("Now type your list of actvities in order of importance")
        print("What activity is most important for you to get done")
        print("Think: if your week was almost full of activities in the priorities list what activity would you do?\n")
        print("list of activities: ")
        for i in range(number, len(Budget)):
            print(Budget[i][0])
        print("")
        print("List of priorities: ")
        for i in range(number):
            print(Budget[i][0])
        print("")
        priority = input("Next top activity: ")
        os.system('cls')
        Budget, number = changeOrder(Budget, priority, number)
        print("")
        number += 1
    addPriority(Budget, "other")
    #add hours to each priority
    number = 0
    print("")
    while number < len(Budget):
        hours_left = hours_in_week
        print("WELCOME TO TIME-BUDGET.COM \n")
        print("Time Bank\n")
        print("Now enter the amount of hours you think you will spend on each of these activities next week")
        print("Current balance: ")
        print("Actvity", "\t", "Hours\n")
        for item in Budget:
            print(item[0], "\t", item[1])
            hours_left -= item[1]
        print("")
        print("Time Remaining:", "\t", hours_left )
        hours = float(input(Budget[number][0] + ": "))
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
        print("Actvity", "\t", "Hours\n")
        for item in Budget:
            print(item[0], endl="")
            print(f'\t\t{item[1]}')
            hours_left -= item[1]
        print("")
        print("Time Remaining:", "\t", "%.2f" % hours_left, "\n" )
        print("Type \"done\" if done")
        priority = input("Or type in an activity to change it hours: ")
        if priority == 'done':
            exit = 1
        else:
            hours = float(input("new hours: "))
            os.system('cls')
            Budget, number = addHoursWithPriority(Budget, priority, hours, number)
            print("")
            number += 1
    os.system('cls')
    hours_left = hours_in_week
    print("THANK YOU FOR VISITING TIME-BUDGET.COM \n")
    print("I would then have you place into a week calender theactivity with its corispoding hours starting with the top priority going down.")
    print("Purpose: Inspire other to use and spend time wisely to help them reach a dream filled and fulfilling life\n")
    print("Final time statement: \n")
    print("Actvity", "\t", "Hours\n")
    for item in Budget:
        print(item[0], "\t\t", item[1])
        hours_left -= item[1]
    print("")
    print("Time Remaining:", "\t", "%.2f" % hours_left, "\n" )
    leave = input("Press Enter to exit...")
    


if __name__ == "__main__":
    main()