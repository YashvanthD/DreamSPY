# DreamSPY

## Introduction:
For computer users of young ages who are highly interested in cricket
and strategy based games, the Fantasy Cricket League is a gaming
web site that allows users to serve as general managers of virtual
professional cricket team. Unlike traditional games, here the users do
not have to play directly. Instead they strategically selects players from
original cricket players.
  - **Project goals** – The goal of this project is to create a game based website.
  
 
Users are the main actors. Any user who wants to play this game needs
to sign-in into the website. Then the user needs to create a team of his
own from the existing players list for each match. The user can modify
his team upto a certain time. The user can join any existing league or he
can create a league of his own. The user is given points on the basis of
the performance of the players that he has chosen. Keeping all these
things in mind, the project is divided into four subsystems.

- **Registration and Login**: In this subsystem, user will be able to
register and enter the main system.
- **Create Team**: After registration, user will create team for the first
time in this subsystem.
- **Modify Team**: Before a match, user can modify his team in this
sub-system.
- **Create League**: User can create his own league and other users
can join the league with credentials.

## Architecture and Design:
Here we discuss about the architecture of the project and give the
details of the modules of the project with the use case diagrams.



## User Guide:
Here we will discuss the details about the usage of the software. The
Fantasy Cricket League is mainly a website. There is no app for it. The
details are described below.

- **Registration** : First the user needs to sign in to the system. If he does not have any account then first he will need to create an account by signing up to the system.



- **Dashboard** : After signing in the user is taken to the dashboard. Here he can see all the features like upcoming matches, total player statistics, league generation etc. If the user clicks the sign out button then he is again moved back to the sign in page.


- **Upcoming Matches** : To create any team the user has to select any of the upcoming matches. And then he will be taken to the player lists page.


- **Creating Team** : After selecting the match the list of the players is given to the user. Only the players corresponding to that match is shown to the user. Clicking the add button adds the player to the team of the user.


There is an option to search players by their name. Also there are options to filter out the players according to their roles (wicketkeeper, batsman etc.) . After the players have been selected then the user has to confirm the team by clicking the confirm team button. The rules for selecting players is -
  1. Maximum 2 Wicketkeeper
  2. Maximum 4 Batsman
  3. Maximum 2 Allrounder
  4. Maximum 4 Bowler
  5. Total 11 players

If this constraint is not followed or balance is over then the user will get errors submitting the players. After selecting the players the page will look like this.


- **Captain and Vice Captain Selection** : After the submit
team button is clicked then there will be options for
selecting captain and vice captain . A list of the 11 players
will be shown and one of them will be selected as captain
and one of them will be selected as vice captains. Without
selecting captain and vice captain the create team procedure
can not be finished.

- **Modify Team** : After the team has finalized the user will be
taken to his team by clicking the My Team button. In the My
Team page the user will get to see all of his players selectedfor that match and their points. Now if the user wants to do
any modification to the team then he will have to click the
button Modify Team. This will take him back to the previous
page where he can remove or add any players keeping all
the constraints in mind. Then he needs to follow the same
procedure described at the create team section.


- **Contests** : The user can join or create leagues. In these leagues,
various other users will be members and they can get to compete
with each other. Here the UI looks like this when the user clicks
the button Contests.


Here there are 3 options for the user.
  1. **Create League**: If the user wants to create a league of his
  own then he needs to click the Create League button. After
  clicking this button a dialogue box will appear that will ask
  for league name and password. After giving a name and
  password a new league will be created.
  


  2. **Join League** : A user can join a league by entering the name
  of the league he wants to join and password of the league.
  


  After joining the league the information of the league is
  shown. Here the users that are in that league are shown
  with their points.

  3. **My League** : The user can get the list of the leagues that he
  is in. Clicking the names of the leagues will show the details
  of the league.
  


- **Fantasy Stats** : In this section the statistics of the players are shown. Which players have the best points are shown. The statistics are categorized according to the role of the players.

