use `merckeypasser`;

INSERT INTO Users
    (`name`, `Password`)
VALUES
    ('TestUser1', 'Password1'),
    ('TestUser2', 'Password1'),
    ('TestUser3', 'Password1'),
    ('TestUser4', 'Password1'),
    ('TestUser5', 'Password1'),
    ('TestUser6', 'Password1'),
    ('TestUser7', 'Password1'),
    ('TestUser8', 'Password1'),
    ('TestUser9', 'Password1'),
    ('TestUser10', 'Password1');

INSERT INTO PasswordKeys
    (UserId, Title, Username, `Password`, Source)
VALUES
    (1, 'elevplan', 'TestUser1', 'Password1', 'https://www.elevplan.dk/'),
    (1, 'youtube', 'TestUser1', 'Password1', 'https://www.youtube.com/'),
    (1, 'google', 'TestUser1', 'Password1', 'https://accounts.google.com/'),
    (1, 'linkedin', 'TestUser1', 'Password1', 'https://www.linkedin.com/'),
    (1, 'github', 'TestUser1', 'Password1', 'https://github.com/'),
    (1, 'reddit', 'TestUser1', 'Password1', 'https://www.reddit.com/'),
    (1, 'stackoverflow', 'TestUser1', 'Password1', 'https://stackoverflow.com/'),
    (1, 'postman', 'TestUser1', 'Password1', 'https://www.getpostman.com/'),
    (1, 'microsoft', 'TestUser1', 'Password1', 'https://www.microsoft.com/'),
    (1, 'ungdomsboligaarhus', 'TestUser1', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (2, 'elevplan', 'TestUser2', 'Password1', 'https://www.elevplan.dk/'),
    (2, 'youtube', 'TestUser2', 'Password1', 'https://www.youtube.com/'),
    (2, 'google', 'TestUser2', 'Password1', 'https://accounts.google.com/'),
    (2, 'linkedin', 'TestUser2', 'Password1', 'https://www.linkedin.com/'),
    (2, 'github', 'TestUser2', 'Password1', 'https://github.com/'),
    (2, 'reddit', 'TestUser2', 'Password1', 'https://www.reddit.com/'),
    (2, 'stackoverflow', 'TestUser2', 'Password1', 'https://stackoverflow.com/'),
    (2, 'postman', 'TestUser2', 'Password1', 'https://www.getpostman.com/'),
    (2, 'microsoft', 'TestUser2', 'Password1', 'https://www.microsoft.com/'),
    (2, 'ungdomsboligaarhus', 'TestUser2', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (3, 'elevplan', 'TestUser3', 'Password1', 'https://www.elevplan.dk/'),
    (3, 'youtube', 'TestUser3', 'Password1', 'https://www.youtube.com/'),
    (3, 'google', 'TestUser3', 'Password1', 'https://accounts.google.com/'),
    (3, 'linkedin', 'TestUser3', 'Password1', 'https://www.linkedin.com/'),
    (3, 'github', 'TestUser3', 'Password1', 'https://github.com/'),
    (3, 'reddit', 'TestUser3', 'Password1', 'https://www.reddit.com/'),
    (3, 'stackoverflow', 'TestUser3', 'Password1', 'https://stackoverflow.com/'),
    (3, 'postman', 'TestUser3', 'Password1', 'https://www.getpostman.com/'),
    (3, 'microsoft', 'TestUser3', 'Password1', 'https://www.microsoft.com/'),
    (3, 'ungdomsboligaarhus', 'TestUser3', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (4, 'elevplan', 'TestUser4', 'Password1', 'https://www.elevplan.dk/'),
    (4, 'youtube', 'TestUser4', 'Password1', 'https://www.youtube.com/'),
    (4, 'google', 'TestUser4', 'Password1', 'https://accounts.google.com/'),
    (4, 'linkedin', 'TestUser4', 'Password1', 'https://www.linkedin.com/'),
    (4, 'github', 'TestUser4', 'Password1', 'https://github.com/'),
    (4, 'reddit', 'TestUser4', 'Password1', 'https://www.reddit.com/'),
    (4, 'stackoverflow', 'TestUser4', 'Password1', 'https://stackoverflow.com/'),
    (4, 'postman', 'TestUser4', 'Password1', 'https://www.getpostman.com/'),
    (4, 'microsoft', 'TestUser4', 'Password1', 'https://www.microsoft.com/'),
    (4, 'ungdomsboligaarhus', 'TestUser4', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (5, 'elevplan', 'TestUser5', 'Password1', 'https://www.elevplan.dk/'),
    (5, 'youtube', 'TestUser5', 'Password1', 'https://www.youtube.com/'),
    (5, 'google', 'TestUser5', 'Password1', 'https://accounts.google.com/'),
    (5, 'linkedin', 'TestUser5', 'Password1', 'https://www.linkedin.com/'),
    (5, 'github', 'TestUser5', 'Password1', 'https://github.com/'),
    (5, 'reddit', 'TestUser5', 'Password1', 'https://www.reddit.com/'),
    (5, 'stackoverflow', 'TestUser5', 'Password1', 'https://stackoverflow.com/'),
    (5, 'postman', 'TestUser5', 'Password1', 'https://www.getpostman.com/'),
    (5, 'microsoft', 'TestUser5', 'Password1', 'https://www.microsoft.com/'),
    (5, 'ungdomsboligaarhus', 'TestUser5', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (6, 'elevplan', 'TestUser6', 'Password1', 'https://www.elevplan.dk/'),
    (6, 'youtube', 'TestUser6', 'Password1', 'https://www.youtube.com/'),
    (6, 'google', 'TestUser6', 'Password1', 'https://accounts.google.com/'),
    (6, 'linkedin', 'TestUser6', 'Password1', 'https://www.linkedin.com/'),
    (6, 'github', 'TestUser6', 'Password1', 'https://github.com/'),
    (6, 'reddit', 'TestUser6', 'Password1', 'https://www.reddit.com/'),
    (6, 'stackoverflow', 'TestUser6', 'Password1', 'https://stackoverflow.com/'),
    (6, 'postman', 'TestUser6', 'Password1', 'https://www.getpostman.com/'),
    (6, 'microsoft', 'TestUser6', 'Password1', 'https://www.microsoft.com/'),
    (6, 'ungdomsboligaarhus', 'TestUser6', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (7, 'elevplan', 'TestUser7', 'Password1', 'https://www.elevplan.dk/'),
    (7, 'youtube', 'TestUser7', 'Password1', 'https://www.youtube.com/'),
    (7, 'google', 'TestUser7', 'Password1', 'https://accounts.google.com/'),
    (7, 'linkedin', 'TestUser7', 'Password1', 'https://www.linkedin.com/'),
    (7, 'github', 'TestUser7', 'Password1', 'https://github.com/'),
    (7, 'reddit', 'TestUser7', 'Password1', 'https://www.reddit.com/'),
    (7, 'stackoverflow', 'TestUser7', 'Password1', 'https://stackoverflow.com/'),
    (7, 'postman', 'TestUser7', 'Password1', 'https://www.getpostman.com/'),
    (7, 'microsoft', 'TestUser7', 'Password1', 'https://www.microsoft.com/'),
    (7, 'ungdomsboligaarhus', 'TestUser7', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (8, 'elevplan', 'TestUser8', 'Password1', 'https://www.elevplan.dk/'),
    (8, 'youtube', 'TestUser8', 'Password1', 'https://www.youtube.com/'),
    (8, 'google', 'TestUser8', 'Password1', 'https://accounts.google.com/'),
    (8, 'linkedin', 'TestUser8', 'Password1', 'https://www.linkedin.com/'),
    (8, 'github', 'TestUser8', 'Password1', 'https://github.com/'),
    (8, 'reddit', 'TestUser8', 'Password1', 'https://www.reddit.com/'),
    (8, 'stackoverflow', 'TestUser8', 'Password1', 'https://stackoverflow.com/'),
    (8, 'postman', 'TestUser8', 'Password1', 'https://www.getpostman.com/'),
    (8, 'microsoft', 'TestUser8', 'Password1', 'https://www.microsoft.com/'),
    (8, 'ungdomsboligaarhus', 'TestUser8', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (9, 'elevplan', 'TestUser9', 'Password1', 'https://www.elevplan.dk/'),
    (9, 'youtube', 'TestUser9', 'Password1', 'https://www.youtube.com/'),
    (9, 'google', 'TestUser9', 'Password1', 'https://accounts.google.com/'),
    (9, 'linkedin', 'TestUser9', 'Password1', 'https://www.linkedin.com/'),
    (9, 'github', 'TestUser9', 'Password1', 'https://github.com/'),
    (9, 'reddit', 'TestUser9', 'Password1', 'https://www.reddit.com/'),
    (9, 'stackoverflow', 'TestUser9', 'Password1', 'https://stackoverflow.com/'),
    (9, 'postman', 'TestUser9', 'Password1', 'https://www.getpostman.com/'),
    (9, 'microsoft', 'TestUser9', 'Password1', 'https://www.microsoft.com/'),
    (9, 'ungdomsboligaarhus', 'TestUser9', 'Password1', 'https://www.ungdomsboligaarhus.dk/'),
    (10, 'elevplan', 'TestUser10', 'Password1', 'https://www.elevplan.dk/'),
    (10, 'youtube', 'TestUser10', 'Password1', 'https://www.youtube.com/'),
    (10, 'google', 'TestUser10', 'Password1', 'https://accounts.google.com/'),
    (10, 'linkedin', 'TestUser10', 'Password1', 'https://www.linkedin.com/'),
    (10, 'github', 'TestUser10', 'Password1', 'https://github.com/'),
    (10, 'reddit', 'TestUser10', 'Password1', 'https://www.reddit.com/'),
    (10, 'stackoverflow', 'TestUser10', 'Password1', 'https://stackoverflow.com/'),
    (10, 'postman', 'TestUser10', 'Password1', 'https://www.getpostman.com/'),
    (10, 'microsoft', 'TestUser10', 'Password1', 'https://www.microsoft.com/'),
    (10, 'ungdomsboligaarhus', 'TestUser10', 'Password1', 'https://www.ungdomsboligaarhus.dk/');