# webpage-to-control-the-movement-of-robot-base
## Robot Base Movement Control System  

### Objective 
To create a web-based system to control a robot's movement, store directional commands in a database, and retrieve the latest command for execution.

### Steps
### Webpage Design:  
   - Create a webpage with buttons for movement (Forward, Backward, Left, Right).  
   - Use JavaScript to send HTTP requests to the backend.  
### Database Setup:  
   - Design a MySQL table with fields: `id`, `direction`, and `timestamp`.  
### PHP Backend:  
   - update_direction.php: Updates the database with movement commands.  
   - get_direction.php: Retrieves the latest command from the database.  

### Result  
A functional system to control a robot's movement through a web interface with stored and retrievable commands.
