# 🏋️ Fitness Planner

**Fitness Planner** is a structured workout app that helps users stay consistent with their fitness goals through personalized programs, daily routines, and gamified progression. Inspired by *Duolingo*, it turns working out into a habit-forming, rewarding experience.

---

## 🚀 Features

* 🗕️ **Daily Workout Plans** – Structured workouts unlocked daily
* 🧠 **Program-Based Progression** – Choose programs tailored to your goals
* 🏆 **Gamification** – Earn XP, level up, and unlock rewards
* 📊 **Progress Tracking** – Monitor completed workouts, streaks, and milestones
* 🔐 **Personalization** – Smart adaptation based on your level and history

---

## 🛠️ Tech Stack

| Layer     | Stack                        |
| --------- | ---------------------------- |
| Frontend  | Vue.js, Pinia                |
| Backend   | Laravel 12, MySQL            |
| UI Design | Bootstrap (custom dashboard) |
| Admin     | Filament (for managing data) |

---

## 📦 Project Structure

```
fitness-planner/
├── frontend/     # Vue + Pinia app
├── backend/      # Laravel API + Filament admin
└── database/     # Migrations and seeders
```

---

## 🧑‍💻 Local Setup

### 1. Clone the repo

```bash
git clone https://github.com/your-username/fitness-planner.git
cd fitness-planner
```

### 2. Backend Setup (Laravel)

```bash
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

### 3. Frontend Setup (Vue)

```bash
cd frontend
npm install
npm run dev
```

### 4. Admin Panel

Visit `http://localhost:8000/admin`

> Default login credentials are seeded. Be sure to update them in production!

---

## 🧪 API Overview

| Endpoint                 | Method | Description              |
| ------------------------ | ------ | ------------------------ |
| `/api/workouts/today`    | GET    | Fetch today's workout    |
| `/api/workouts/complete` | POST   | Log a completed workout  |
| `/api/progress`          | GET    | View progress & XP stats |

---

## 📈 Future Roadmap

* ✅ XP and Streak system
* ⏳ AI-powered workout recommendations
* ⏳ Social features (friends, challenges)
* ⏳ PWA or mobile app integration
* ⏳ Apple Health / Google Fit sync

---

## 📄 License

This project is licensed under the **MIT License**.
Feel free to use, fork, and improve it!

---

## 💬 Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you’d like to change.

---

## 🙌 Built With Love

Made with ❤️ by Theo @ Tedtek Studios
