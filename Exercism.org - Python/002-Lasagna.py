class Lasagna:
    
    # Constant for the expected total cooking time
    EXPECTED_COOK_TIME = 40  # 40 minutes is the expected cook time
    
    # Method to return the expected cook time (in minutes)
    def expected_cook_time(self):
        return self.EXPECTED_COOK_TIME

    # Method to calculate the remaining cook time based on elapsed minutes in the oven
    def remaining_cook_time(self, elapsed_minutes):
        return self.EXPECTED_COOK_TIME - elapsed_minutes

    # Method to calculate the total preparation time, assuming 2 minutes per layer
    def total_preparation_time(self, layers_to_prep):
        return layers_to_prep * 2

    # Method to calculate the total elapsed time (preparation + oven time)
    def total_elapsed_time(self, layers_to_prep, elapsed_minutes):
        return self.total_preparation_time(layers_to_prep) + elapsed_minutes

    # Method to return a string "Ding!" for when the lasagna is done
    def alarm(self):
        return "Ding!"


# Creating an instance of the Lasagna class
lasagna = Lasagna()

# Calling methods from the Lasagna class and printing their outputs
print(lasagna.expected_cook_time())  # Output: 40
print(lasagna.remaining_cook_time(30))  # Output: 10
print(lasagna.total_preparation_time(3))  # Output: 6 (3 layers * 2 minutes per layer)
print(lasagna.total_elapsed_time(3, 20))  # Output: 26 (6 minutes prep + 20 minutes baking)
print(lasagna.alarm())  # Output: Ding!
