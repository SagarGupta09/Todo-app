# Laravel ToDo App

## Today's Update - API Integration

### Features Added

1. **API CRUD Operations**  
   - Implemented Create, Read, Update, and Delete functionality for tasks via API endpoints.
   - Users can manage their tasks through API requests.
   - Admins can view and manage all users' tasks via API.

2. **API Authentication**  
   - Secured API endpoints using token-based authentication.
   - Only authenticated users can access the API routes.
   - Role-based access is maintained:  
     - **Admin**: Can manage all users’ tasks.  
     - **User**: Can manage only their own tasks.

### Example API Endpoints

| Action        | Endpoint                 | Method |
|---------------|-------------------------|--------|
| List Tasks    | `/api/todos`            | GET    |
| Create Task   | `/api/todos`            | POST   |
| Update Task   | `/api/todos/{id}`       | PUT    |
| Delete Task   | `/api/todos/{id}`       | DELETE |

### Authentication

- Use the `/api/login` endpoint to receive an access token.  
- Include the token in the `Authorization` header as `Bearer <token>` for all protected API requests.

### Notes

- API responses return JSON data.  
- Proper error messages are returned for unauthorized or invalid requests.

---

This update extends the ToDo app functionality from manual UI-based CRUD to fully functional RESTful API support with authentication and role-based access control.
