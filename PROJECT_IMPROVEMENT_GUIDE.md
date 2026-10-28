# Event Management System - Code Analysis & Improvement Guide

This comprehensive guide outlines all identified security vulnerabilities, functional bugs, database anomalies, and architectural improvements for the Event Management System project (`d:/event/eventmanagement`). It provides exact file locations, code snippets, and step-by-step implementation instructions.

---

## 📌 Core Mandate: "Same-to-Same" Design & Structural Preservation Policy

> [!IMPORTANT]
> **Strict Non-Negotiable Directives**:
> 1. **"Same-to-Same" UI/UX Design Parity**: The existing visual look, templates, CSS styles, Bootstrap styling, colors, typography, buttons, layouts, header/footer assets, and overall aesthetic across both Frontend and Admin panels **must remain 100% identical ("same-to-same")**. Do NOT redesign, re-theme, or alter existing frontend or backend visual designs.
> 2. **Code & Structural Integrity**: Do NOT disrupt or make breaking changes to the existing codebase structure, folder hierarchy, route naming conventions, controller workflows, session handling (`Session::get('user')`, `Session::get('admin')`), or existing database schemas. All changes must be surgical, backwards-compatible, and non-destructive.

### Key Guidelines for Execution:
- **Zero Visual Disruption**: Keep all existing Blade templates (`front/*.blade.php`, `admin/*.blade.php`), stylesheets, and scripts intact. When adding new features (e.g. Razorpay payment modal, QR code ticket display, search/filter controls, admin stats), adapt strictly to existing HTML classes (`btn`, `card`, `table`, etc.) so new elements match seamlessly without altering surrounding layouts.
- **No Unsolicited Framework Switches**: Do not introduce new CSS frameworks (such as Tailwind CSS or alternative CSS resets) that override or conflict with the existing theme.
- **Backwards-Compatible Code**: Maintain existing controller action flows, URL endpoints, and route names. Fix security holes (such as middleware protection, CSRF methods, and input validation) and logic bugs (such as `$fillable` fields and dynamic price calculations) cleanly in place without ripping out or rewriting working architecture.
- **Database Safety**: All database updates must be additive (e.g. adding nullable columns or default values), preserving existing records and relationships without dropping tables or altering existing data flows.

---

## Table of Contents
0. [Core Mandate: "Same-to-Same" Design & Structural Preservation Policy](#-core-mandate-same-to-same-design--structural-preservation-policy)
1. [Overview & Project Assessment](#1-overview--project-assessment)
2. [Critical Security Vulnerabilities & Solutions](#2-critical-security-vulnerabilities--solutions)
   - [2.1 Unprotected Admin Routes (Missing Middleware)](#21-unprotected-admin-routes-missing-middleware)
   - [2.2 Account Takeover in Password Reset](#22-account-takeover-in-password-reset)
   - [2.3 Destructive Actions Over HTTP GET (CSRF & Crawler Risks)](#23-destructive-actions-over-http-get-csrf--crawler-risks)
   - [2.4 Insecure Direct Object References (IDOR) on PDF Downloads](#24-insecure-direct-object-references-idor-on-pdf-downloads)
   - [2.5 Insecure Card Data Handling (PCI-DSS)](#25-insecure-card-data-handling-pci-dss)
3. [Severe Bugs & Business Logic Errors](#3-severe-bugs--business-logic-errors)
   - [3.1 Mass Assignment Bug: Payment Status Ignored](#31-mass-assignment-bug-payment-status-ignored)
   - [3.2 Hardcoded $29 Ticket Pricing](#32-hardcoded-29-ticket-pricing)
   - [3.3 Invoice Number Generation Collision & Truncation Bug](#33-invoice-number-generation-collision--truncation-bug)
   - [3.4 DomPDF Flexbox Layout Incompatibility](#34-dompdf-flexbox-layout-incompatibility)
   - [3.5 Missing Event Capacity & Date Validity Validation](#35-missing-event-capacity--date-validity-validation)
4. [Database & Relational Model Fixes](#4-database--relational-model-fixes)
   - [4.1 String References vs. Foreign Keys](#41-string-references-vs-foreign-keys)
   - [4.2 Missing Eloquent Relationships](#42-missing-eloquent-relationships)
   - [4.3 Duplicate Admin Records (Missing Unique Constraints)](#43-duplicate-admin-records-missing-unique-constraints)
   - [4.4 Missing Database Transactions](#44-missing-database-transactions)
5. [Code Quality, Standards & Refactoring](#5-code-quality-standards--refactoring)
   - [5.1 PSR-4 Class & File Naming Conventions](#51-psr-4-class--file-naming-conventions)
   - [5.2 Controller Coupling: Service Layer Pattern](#52-controller-coupling-service-layer-pattern)
   - [5.3 File Storage Management & Disk Leaks](#53-file-storage-management--disk-leaks)
   - [5.4 Blade Template Inheritance](#54-blade-template-inheritance)
   - [5.5 Admin Dashboard Analytics](#55-admin-dashboard-analytics)
6. [Live Razorpay & RuPay Payment Integration & Currency Conversion (USD to INR)](#6-live-razorpay--rupay-payment-integration--currency-conversion-usd-to-inr)
   - [6.1 Currency Conversion Architecture: USD ($) to INR (₹)](#61-currency-conversion-architecture-usd--to-inr-)
   - [6.2 Package Installation & Environment Setup](#62-package-installation--environment-setup)
   - [6.3 Database Migration for Payment Tracking](#63-database-migration-for-payment-tracking)
   - [6.4 Controller & Service Implementation (Order Creation & HMAC Verification)](#64-controller--service-implementation-order-creation--hmac-verification)
   - [6.5 Frontend Razorpay & RuPay Modal Checkout (Blade View)](#65-frontend-razorpay--rupay-modal-checkout-blade-view)
   - [6.6 Route Declarations in routes/web.php](#66-route-declarations-in-routeswebphp)
   - [6.7 Webhook Handler (For Edge Cases & Network Drops)](#67-webhook-handler-for-edge-cases--network-drops)
7. [Completed Features vs. Recommended New Feature Additions](#7-completed-features-vs-recommended-new-feature-additions)
   - [7.1 Inventory of Already Completed Functions](#71-inventory-of-already-completed-functions)
   - [7.2 Specification of New Functions to Add](#72-specification-of-new-functions-to-add)
8. [Step-by-Step Implementation Roadmap & Priority Matrix](#8-step-by-step-implementation-roadmap--priority-matrix)
9. [Master Actionable Implementation Checklist (Phase-by-Phase)](#9-master-actionable-implementation-checklist-phase-by-phase)
   - [Phase 1: Critical Security & Core Bug Fixes (P0)](#phase-1-critical-security--core-bug-fixes-p0)
   - [Phase 2: Payment Gateway & Currency Conversion (Razorpay & RuPay) (P1)](#phase-2-payment-gateway--currency-conversion-razorpay--rupay-p1)
   - [Phase 3: Database & Relational Architecture Fixes (P1 & P2)](#phase-3-database--relational-architecture-fixes-p1--p2)
   - [Phase 4: Advanced Features Implementation (P2 & P3)](#phase-4-advanced-features-implementation-p2--p3)
   - [Phase 5: Code Modernization & PSR-4 Refactoring (P3)](#phase-5-code-modernization--psr-4-refactoring-p3)
   - [Phase 6: Production Hardening & Pre-Deployment Verification](#phase-6-production-hardening--pre-deployment-verification)

---

## 1. Overview & Project Assessment

- **Framework**: Laravel 10.x
- **Key Modules**: Authentication (User & Admin), Events Management, Speaker Management, Categories, Ticket Booking, Card/Cash/Offline Payment Simulation, PDF Invoicing and Ticketing (Barryvdh DomPDF).
- **Core Findings**: While the application provides end-to-end functionality, several architectural shortcuts, missing middleware layers, and security bypasses require remediation before deployment.

---

## 2. Critical Security Vulnerabilities & Solutions

### 2.1 Unprotected Admin Routes (Missing Middleware)
- **Target File**: `routes/web.php` (Lines 73–122)
- **Target Controller**: `app/Http/Controllers/admin.php`
- **Issue**: Only `dashboard()` checks session status. Routes like `/admin/eventlist`, `/admin/deleteevent/{id}`, `/admin/booking-list`, `/admin/approve-payment/{id}`, and `/admin/invoice-list` have no authentication checks. Anyone knowing or guessing the URL can perform administrative operations.
- **Recommended Solution**:
  1. Generate an admin middleware:
     ```bash
     php artisan make:middleware AdminAuthMiddleware
     ```
  2. In `app/Http/Middleware/AdminAuthMiddleware.php`:
     ```php
     namespace App\Http\Middleware;

     use Closure;
     use Illuminate\Http\Request;
     use Illuminate\Support\Facades\Session;

     class AdminAuthMiddleware
     {
         public function handle(Request $request, Closure $next)
         {
             if (!Session::has('admin')) {
                 return redirect()->route('admin.login')->with('error', 'Please login to access the admin portal.');
             }
             return $next($request);
         }
     }
     ```
  3. Register the alias in `app/Http/Kernel.php` under `$middlewareAliases`:
     ```php
     'admin.auth' => \App\Http\Middleware\AdminAuthMiddleware::class,
     ```
  4. In `routes/web.php`, group all admin routes:
     ```php
     Route::prefix('admin')->middleware(['admin.auth'])->group(function () {
         Route::get('/dashboard', [admin::class, 'dashboard'])->name('admin.dashboard');
         Route::get('/category', [admin::class, 'category'])->name('admin.category');
         Route::post('/addcategory', [admin::class, 'addcategory'])->name('admin.addcategory');
         Route::get('/categorylist', [admin::class, 'categorylist'])->name('admin.categorylist');
         // ... all other administrative routes
     });
     ```

---

### 2.2 Account Takeover in Password Reset
- **Target Files**:
  - `app/Http/Controllers/admin.php` (Lines 418–427)
  - `app/Http/Controllers/front.php` (Lines 324–363)
  - `routes/web.php` (Lines 63–70, 109–116)
- **Issue**:
  - In `admin.php`, `updatePassword()` accepts `$request->email` directly from a public form POST and updates the password without token verification, email verification, or session validation.
  - In `front.php`, anyone who inputs another user's email into `checkUserForgotPassword()` gets redirected to `userResetPasswordPage()` and can immediately set a new password without receiving an OTP or link.
- **Recommended Solution**:
  Use Laravel's native password reset system or generate cryptographically secure, time-limited reset tokens stored in the `password_reset_tokens` table.
  ```php
  // Generate token and email link
  $token = Str::random(64);
  DB::table('password_reset_tokens')->updateOrInsert(
      ['email' => $request->email],
      ['token' => Hash::make($token), 'created_at' => now()]
  );
  // Send email containing route('password.reset', ['token' => $token, 'email' => $request->email])
  ```

---

### 2.3 Destructive Actions Over HTTP GET (CSRF & Crawler Risks)
- **Target File**: `routes/web.php`
- **Current Routes**:
  ```php
  Route::get('/admin/deletecategory/{id}', [admin::class, 'deletecategory'])->name('admin.deletecategory');
  Route::get('/admin/deleteevent/{id}',[admin::class,'deleteevent'])->name('admin.deleteevent');
  Route::get('/admin/deletespeaker/{id}', [admin::class, 'deletespeaker'])->name('admin.deletespeaker');
  Route::get('/admin/approve-payment/{id}', [admin::class, 'approvePayment'])->name('admin.approve.payment');
  ```
- **Issue**: State changes via `GET` can be automatically triggered by browser prefetching, web crawlers, or cross-site request forgery attacks (e.g. `<img src="...">`).
- **Recommended Solution**:
  Change routes to `DELETE` or `POST`:
  ```php
  Route::delete('/admin/category/{id}', [admin::class, 'deletecategory'])->name('admin.deletecategory');
  Route::delete('/admin/event/{id}', [admin::class, 'deleteevent'])->name('admin.deleteevent');
  Route::delete('/admin/speaker/{id}', [admin::class, 'deletespeaker'])->name('admin.deletespeaker');
  Route::post('/admin/approve-payment/{id}', [admin::class, 'approvePayment'])->name('admin.approve.payment');
  ```
  In Blade views (`eventlist.blade.php`, `categorylist.blade.php`, etc.), replace plain `<a>` tags with form buttons:
  ```html
  <form action="{{ route('admin.deleteevent', $event->id) }}" method="POST" onsubmit="return confirm('Delete this event?');" style="display:inline-block;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
  </form>
  ```

---

### 2.4 Insecure Direct Object References (IDOR) on PDF Downloads
- **Target Files**:
  - `app/Http/Controllers/front.php` (Lines 307–319) - `downloadTicket($id)`
  - `app/Http/Controllers/InvoiceController.php` (Lines 42–55) - `download($booking_id)`
- **Issue**: There is no check verifying that the ticket or invoice belongs to the currently authenticated user. Anyone can iterate through ID numbers (`/download-ticket/1`, `/download-ticket/2`) and download private user data.
- **Recommended Solution**:
  ```php
  public function downloadTicket($id)
  {
      if (!Session::has('user')) {
          return redirect()->route('login')->with('error', 'Please login to download your ticket.');
      }

      $user = Session::get('user');
      $booking = Booking::with('event')
          ->where('id', $id)
          ->where('user_id', $user->id)
          ->firstOrFail();

      if ($booking->payment_status !== 'paid') {
          return back()->with('error', 'Payment Pending!');
      }

      $pdf = Pdf::loadView('front.ticket', compact('booking'));
      return $pdf->download('ticket-' . $booking->id . '.pdf');
  }
  ```

---

### 2.5 Insecure Card Data Handling (PCI-DSS)
- **Target Files**:
  - `resources/views/front/card-payment.blade.php`
  - `app/Http/Controllers/front.php` (Lines 260–290) - `cardProcess`
- **Issue**: Card numbers, expiry dates, and CVVs are sent directly to the application server without validation or tokenization.
- **Recommended Solution**:
  Integrate a compliant payment gateway like Stripe Elements or Razorpay. The card details should be tokenized in the browser, and only the generated payment method ID should be sent to the backend.

---

## 3. Severe Bugs & Business Logic Errors

### 3.1 Mass Assignment Bug: Payment Status Ignored
- **Target File**: `app/Models/Booking.php` (Lines 14–24)
- **Current Code**:
  ```php
  protected $fillable = [
      'event_id',
      'user_id',
      'username',
      'name',
      'email',
      'mobile',
      'tickets',
      'total_amount',
      'payment_method'
  ];
  ```
- **Issue**: `payment_status` is omitted from `$fillable`. When `Booking::create(['payment_status' => 'paid', ...])` executes, Eloquent silently discards `payment_status`. All bookings default to `'pending'` in the database. When users attempt to download their tickets, `downloadTicket()` blocks them with `"Payment Pending!"`.
- **Recommended Solution**:
  Add `'payment_status'` to the `$fillable` array in `app/Models/Booking.php`:
  ```php
  protected $fillable = [
      'event_id',
      'user_id',
      'username',
      'name',
      'email',
      'mobile',
      'tickets',
      'total_amount',
      'payment_method',
      'payment_status'
  ];
  ```

---

### 3.2 Hardcoded $29 Ticket Pricing
- **Target Files**:
  - `app/Http/Controllers/front.php` (Lines 198, 241, 250, 273, 283)
  - `resources/views/front/card-payment.blade.php` (Line 76)
  - `resources/views/front/booking.blade.php` (Line 137)
- **Current Code**:
  ```php
  'total_amount' => $request->tickets * 29
  ```
- **Issue**: Every event in the system is forced to be priced at $29, regardless of event type or settings.
- **Recommended Solution**:
  1. Add a `price` column via a new migration:
     ```php
     Schema::table('events', function (Blueprint $table) {
         $table->decimal('price', 10, 2)->default(0.00)->after('description');
     });
     ```
  2. Add `'price'` to `$fillable` in `app/Models/EventModels.php`.
  3. Update ticket calculation in `front.php`:
     ```php
     $event = EventModels::findOrFail($request->event_id);
     $totalAmount = $request->tickets * $event->price;
     ```

---

### 3.3 Invoice Number Generation Collision & Truncation Bug
- **Target File**: `app/Http/Controllers/InvoiceController.php` (Lines 12–23)
- **Current Code**:
  ```php
  $number = intval(substr($last->invoice_no, -3)) + 1;
  return 'INV-' . date('Y') . '-' . str_pad($number, 3, '0', STR_PAD_LEFT);
  ```
- **Issue**:
  - When the invoice counter reaches 1000, `substr(..., -3)` takes `"000"`, resetting `$number` back to `1`.
  - Concurrent requests generate identical invoice numbers.
- **Recommended Solution**:
  Extract the sequence reliably or base the number on the primary ID / date timestamps:
  ```php
  function generateInvoiceNumber()
  {
      $nextId = (Invoice::max('id') ?? 0) + 1;
      return 'INV-' . date('Y') . '-' . str_pad($nextId, 5, '0', STR_PAD_LEFT);
  }
  ```

---

### 3.4 DomPDF Flexbox Layout Incompatibility
- **Target File**: `resources/views/front/ticket.blade.php` (Lines 7, 51–60)
- **Issue**: The view uses external CSS from CDNs and CSS Flexbox (`display: flex; justify-content: space-between;`). DomPDF does not support Flexbox and may fail when loading remote resources without proper configuration.
- **Recommended Solution**:
  Use standard HTML tables with inline or `<style>` table CSS, as done in `resources/views/invoice.blade.php`:
  ```html
  <table width="100%" cellpadding="6" cellspacing="0" style="border-collapse: collapse;">
      <tr>
          <td width="50%"><strong>Ticket Holder:</strong> {{ $booking->name }}</td>
          <td width="50%" align="right"><strong>Tickets:</strong> {{ $booking->tickets }}</td>
      </tr>
  </table>
  ```

---

### 3.5 Missing Event Capacity & Date Validity Validation
- **Target Files**:
  - `app/Http/Controllers/front.php` (`bookingPage` and `bookEvent`)
- **Issue**: Users can book events that have already occurred or book unlimited tickets for full venues.
- **Recommended Solution**:
  1. Add `capacity` and `booked_seats` to the `events` table.
  2. Validate in `bookEvent()`:
     ```php
     $event = EventModels::findOrFail($request->event_id);
     if (\Carbon\Carbon::parse($event->date)->isPast()) {
         return back()->with('error', 'This event has already ended.');
     }
     $totalBooked = Booking::where('event_id', $event->id)->sum('tickets');
     if (($totalBooked + $request->tickets) > $event->capacity) {
         return back()->with('error', 'Not enough seats available.');
     }
     ```

---

## 4. Database & Relational Model Fixes

### 4.1 String References vs. Foreign Keys
- **Target Files**:
  - `database/migrations/2026_03_19_065200_create_events_table.php` (Lines 19, 32)
  - `app/Http/Controllers/front.php` (Line 55)
  - `app/Http/Controllers/admin.php` (Line 130)
- **Current State**:
  ```php
  $table->string('category')->nullable();
  $table->string('speaker_name')->nullable();
  ```
- **Issue**: The original ER diagram (`er.puml`) specified `category_id` and `speaker_id` as foreign keys. Using plain strings creates loose associations, prevents cascade deletes/updates, and forces fragile lookups like:
  ```php
  $speaker = Speaker::where('name', $event->speaker_name)->first();
  ```
- **Recommended Solution**:
  Create a migration to add foreign keys:
  ```php
  Schema::table('events', function (Blueprint $table) {
      $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
      $table->foreignId('speaker_id')->nullable()->constrained('speakers')->nullOnDelete();
  });
  ```

---

### 4.2 Missing Eloquent Relationships
Configure proper relationships across models:

1. In `app/Models/Booking.php`:
   ```php
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }
   public function invoice()
   {
       return $this->hasOne(Invoice::class, 'booking_id');
   }
   ```
2. In `app/Models/EventModels.php`:
   ```php
   public function categoryRelation()
   {
       return $this->belongsTo(Category::class, 'category_id');
   }
   public function speakerRelation()
   {
       return $this->belongsTo(Speaker::class, 'speaker_id');
   }
   public function bookings()
   {
       return $this->hasMany(Booking::class, 'event_id');
   }
   ```
3. In `app/Models/User.php`:
   ```php
   public function bookings()
   {
       return $this->hasMany(Booking::class, 'user_id');
   }
   public function invoices()
   {
       return $this->hasMany(Invoice::class, 'user_id');
   }
   ```

---

### 4.3 Duplicate Admin Records (Missing Unique Constraints)
- **Target File**: `database/migrations/2026_03_13_062559_create_admins_table.php` (Lines 13–14)
- **Issue**: `email` and `username` columns are not indexed or marked unique, allowing duplicate admin credentials.
- **Recommended Solution**:
  Add unique constraints:
  ```php
  $table->string('email')->unique();
  $table->string('username')->unique();
  ```

---

### 4.4 Missing Database Transactions
- **Target File**: `app/Http/Controllers/front.php` (Lines 233–251, 265–285)
- **Issue**: Booking creation and invoice generation occur independently. If invoice creation fails, the booking remains stored without an invoice.
- **Recommended Solution**:
  Wrap them in a database transaction:
  ```php
  use Illuminate\Support\Facades\DB;

  DB::transaction(function () use ($request, $user, $event, &$booking) {
      $booking = Booking::create([...]);
      Invoice::create([
          'invoice_no' => $this->generateInvoiceNumber(),
          'booking_id' => $booking->id,
          'user_id'    => $user->id,
          'event_id'   => $event->id,
          'amount'     => $booking->total_amount,
          'status'     => $booking->payment_status
      ]);
  });
  ```

---

## 5. Code Quality, Standards & Refactoring

> [!NOTE]
> **Adherence to Structural Preservation**: While standardizing PSR-4 class names is standard convention, all changes must strictly preserve backwards compatibility with existing route references, controllers, models, and Blade views. If keeping the existing code structure unchanged is preferred to avoid breaking changes or workflow friction, the existing file names (`front.php`, `admin.php`, etc.) should be maintained as-is while focusing on security and functional fixes.

### 5.1 PSR-4 Class & File Naming Conventions (Optional Architectural Cleanup)
Rename lowercase or non-standard class and file names to follow standard Laravel conventions:

| Current File | Current Class | Recommended New Class |
| :--- | :--- | :--- |
| `app/Http/Controllers/front.php` | `class front` | `class FrontController` |
| `app/Http/Controllers/admin.php` | `class admin` | `class AdminController` |
| `app/Models/AdminModels.php` | `class AdminModels` | `class Admin` |
| `app/Models/EventModels.php` | `class EventModels` | `class Event` |
| `app/Models/Speaker.php` | `class speaker` | `class Speaker` |
| `app/Models/frontmodel.php` | `class frontmodel` | Delete (unused empty model) |

---

### 5.2 Controller Coupling: Service Layer Pattern
- **Target File**: `app/Http/Controllers/front.php` (Lines 245, 278)
- **Current Code**:
  ```php
  $invoiceController = new \App\Http\Controllers\InvoiceController();
  $invoiceController->createInvoice(...);
  ```
- **Issue**: Directly instantiating controllers inside other controllers couples HTTP handlers together.
- **Recommended Solution**:
  Create `app/Services/InvoiceService.php` to handle invoice creation and call that service from both controllers.

---

### 5.3 File Storage Management & Disk Leaks
- **Target File**: `app/Http/Controllers/admin.php` (Lines 148–149, 214–217, 301–304)
- **Current Code**:
  ```php
  $imageName = time() . '.' . $request->image->extension();
  $request->image->move(public_path('event_images'), $imageName);
  ```
- **Issue**:
  1. Files are moved directly into `public/event_images` rather than managed via Laravel's `Storage` disk.
  2. When updating an event or deleting an event/speaker, existing image files are never removed from the disk, causing storage leaks over time.
- **Recommended Solution**:
  Use `Storage::disk('public')` and unlink existing images before uploading replacements or upon deleting records:
  ```php
  if ($event->image && Storage::disk('public')->exists('event_images/' . $event->image)) {
      Storage::disk('public')->delete('event_images/' . $event->image);
  }
  ```

---

### 5.4 Blade Template Inheritance
- **Target Files**: `resources/views/admin/*.blade.php` and `resources/views/front/*.blade.php`
- **Issue**: Templates manually `@include('admin.header')` and `@include('admin.footer')` on each page rather than extending a master layout.
- **Recommended Solution**:
  Create `resources/views/layouts/admin.blade.php`:
  ```html
  <!DOCTYPE html>
  <html>
  <head>
      @include('admin.header_assets')
  </head>
  <body class="fixed-left">
      <div id="wrapper">
          @include('admin.topbar')
          @include('admin.leftsidebar')
          <div class="content-page">
              <div class="content">
                  @yield('content')
              </div>
          </div>
          @include('admin.footer')
      </div>
  </body>
  </html>
  ```
  Then in child views (e.g., `dashboard.blade.php`):
  ```html
  @extends('layouts.admin')

  @section('content')
  <div class="container">
      <h2>Admin Dashboard</h2>
  </div>
  @endsection
  ```

---

### 5.5 Admin Dashboard Analytics
- **Target File**: `resources/views/admin/dashboard.blade.php`
- **Issue**: Contains only static text (`<h1>Welcome to Admin Panel......</h1>`).
- **Recommended Solution**:
  In `AdminController::dashboard()`, gather summary statistics and pass them to the view:
  ```php
  public function dashboard()
  {
      $totalEvents = EventModels::count();
      $totalBookings = Booking::count();
      $totalRevenue = Booking::where('payment_status', 'paid')->sum('total_amount');
      $recentBookings = Booking::with('event')->latest()->take(5)->get();

      return view('admin.dashboard', compact('totalEvents', 'totalBookings', 'totalRevenue', 'recentBookings'));
  }
  ```

---

## 6. Live Razorpay & RuPay Payment Integration & Currency Conversion (USD to INR)

To transition from mock card payments to **live, production-ready payments with RuPay cards, UPI (GPay, PhonePe, Paytm), and Indian NetBanking**, Razorpay is the leading gateway solution. This section details how to manage currency conversion from USD ($) to Indian Rupees (₹ INR) and integrate Razorpay end-to-end.

---

### 6.1 Currency Conversion Architecture: USD ($) to INR (₹)

Currently, the application displays hardcoded dollar signs (`$`) and values (e.g. `$29`). In order to charge Indian customers via Razorpay and RuPay, transactions must be processed in **INR (₹)**.

#### Option A: Configurable Exchange Rate (Recommended for Simplicity & Speed)
1. In `config/app.php`:
   ```php
   'currency' => env('APP_CURRENCY', 'INR'),
   'currency_symbol' => env('APP_CURRENCY_SYMBOL', '₹'),
   'usd_to_inr_rate' => env('USD_TO_INR_RATE', 83.50), // 1 USD = 83.50 INR
   ```
2. In `.env`:
   ```env
   APP_CURRENCY=INR
   APP_CURRENCY_SYMBOL="₹"
   USD_TO_INR_RATE=83.50
   ```
3. Conversion Helper Class (`app/Helpers/CurrencyHelper.php`):
   ```php
   namespace App\Helpers;

   class CurrencyHelper
   {
       public static function convertUsdToInr(float $usdAmount): float
       {
           $rate = config('app.usd_to_inr_rate', 83.50);
           return round($usdAmount * $rate, 2);
       }

       public static function formatInr(float $amount): string
       {
           return '₹' . number_format($amount, 2);
       }
   }
   ```
   *Example*: A `$29` ticket converts to `$29 * 83.50 = ₹2,421.50`.

#### Option B: Real-Time Live Exchange Rate via API
If dynamic rates are required, fetch and cache the live exchange rate daily:
```php
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

public static function getLiveUsdToInrRate(): float
{
    return Cache::remember('usd_to_inr_exchange_rate', 86400, function () {
        $response = Http::get('https://open.er-api.com/v6/latest/USD');
        return (float) ($response->json('rates.INR') ?? 83.50);
    });
}
```

---

### 6.2 Package Installation & Environment Setup

1. Install the official Razorpay PHP SDK via Composer:
   ```bash
   composer require razorpay/razorpay
   ```
2. Register and obtain API credentials from the [Razorpay Dashboard](https://dashboard.razorpay.com/) (`Key Id` and `Key Secret`).
3. Add the credentials to `.env`:
   ```env
   RAZORPAY_KEY_ID=rzp_test_YourKeyIdHere
   RAZORPAY_KEY_SECRET=YourKeySecretHere
   RAZORPAY_WEBHOOK_SECRET=YourWebhookSecretHere
   ```
4. Register the credentials in `config/services.php`:
   ```php
   'razorpay' => [
       'key'            => env('RAZORPAY_KEY_ID'),
       'secret'         => env('RAZORPAY_KEY_SECRET'),
       'webhook_secret' => env('RAZORPAY_WEBHOOK_SECRET'),
   ],
   ```

---

### 6.3 Database Migration for Payment Tracking

Create a migration to track Razorpay order IDs, payment IDs, signatures, and INR amounts:
```bash
php artisan make:migration add_razorpay_fields_to_bookings_table
```

In the migration file:
```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('currency', 10)->default('INR')->after('total_amount');
            $table->decimal('amount_inr', 10, 2)->nullable()->after('currency');
            $table->string('razorpay_order_id')->nullable()->after('payment_method');
            $table->string('razorpay_payment_id')->nullable()->after('razorpay_order_id');
            $table->string('razorpay_signature')->nullable()->after('razorpay_payment_id');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn([
                'currency',
                'amount_inr',
                'razorpay_order_id',
                'razorpay_payment_id',
                'razorpay_signature'
            ]);
        });
    }
};
```
*Remember to add these new columns to the `$fillable` array in `app/Models/Booking.php`.*

---

### 6.4 Controller & Service Implementation (Order Creation & HMAC Verification)

Create `app/Http/Controllers/PaymentController.php`:

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Booking;
use App\Models\EventModels;
use App\Models\Invoice;
use App\Helpers\CurrencyHelper;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new Api(
            config('services.razorpay.key'),
            config('services.razorpay.secret')
        );
    }

    /**
     * Step 1: Initiate Razorpay Order in INR
     */
    public function initiatePayment(Request $request)
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'Please login to book tickets.');
        }

        $user = Session::get('user');
        $event = EventModels::findOrFail($request->event_id);
        $tickets = (int) ($request->tickets ?? 1);

        // Calculate USD amount & convert to INR
        $priceUsd = $event->price ?? 29;
        $totalUsd = $tickets * $priceUsd;
        $totalInr = CurrencyHelper::convertUsdToInr($totalUsd);

        // Razorpay expects amount in paise (1 INR = 100 paise)
        $amountInPaise = (int) round($totalInr * 100);

        // Create Order via Razorpay API
        $orderData = [
            'receipt'         => 'rcpt_' . time() . '_' . $user->id,
            'amount'          => $amountInPaise,
            'currency'        => 'INR',
            'payment_capture' => 1 // auto-capture
        ];

        $razorpayOrder = $this->api->order->create($orderData);

        // Store pending booking
        $booking = Booking::create([
            'event_id'          => $event->id,
            'user_id'           => $user->id,
            'username'          => $user->name,
            'name'              => $request->name,
            'email'             => $request->email,
            'mobile'            => $request->mobile,
            'tickets'           => $tickets,
            'total_amount'      => $totalUsd,
            'currency'          => 'INR',
            'amount_inr'        => $totalInr,
            'payment_method'    => 'razorpay_rupay',
            'payment_status'    => 'pending',
            'razorpay_order_id' => $razorpayOrder['id']
        ]);

        return view('front.razorpay-checkout', [
            'booking'       => $booking,
            'event'         => $event,
            'razorpayOrder' => $razorpayOrder,
            'amountInPaise' => $amountInPaise,
            'totalInr'      => $totalInr,
            'razorpayKey'   => config('services.razorpay.key')
        ]);
    }

    /**
     * Step 2: Verify Razorpay Signature (HMAC SHA-256)
     */
    public function verifyPayment(Request $request)
    {
        $request->validate([
            'razorpay_order_id'   => 'required',
            'razorpay_payment_id' => 'required',
            'razorpay_signature'  => 'required',
            'booking_id'          => 'required|exists:bookings,id'
        ]);

        $booking = Booking::findOrFail($request->booking_id);

        // Security check: Verify cryptographic HMAC SHA-256 signature
        $expectedSignature = hash_hmac(
            'sha256',
            $request->razorpay_order_id . '|' . $request->razorpay_payment_id,
            config('services.razorpay.secret')
        );

        if (!hash_equals($expectedSignature, $request->razorpay_signature)) {
            $booking->update(['payment_status' => 'failed']);
            return redirect()->route('my.orders')->with('error', 'Payment verification failed: Invalid Signature.');
        }

        // Database transaction: Mark booking paid & generate invoice
        DB::transaction(function () use ($booking, $request) {
            $booking->update([
                'payment_status'       => 'paid',
                'razorpay_payment_id'  => $request->razorpay_payment_id,
                'razorpay_signature'   => $request->razorpay_signature
            ]);

            // Generate Invoice
            $invoiceNumber = 'INV-' . date('Y') . '-' . str_pad($booking->id, 5, '0', STR_PAD_LEFT);
            Invoice::updateOrCreate(
                ['booking_id' => $booking->id],
                [
                    'invoice_no' => $invoiceNumber,
                    'user_id'    => $booking->user_id,
                    'event_id'   => $booking->event_id,
                    'amount'     => $booking->amount_inr,
                    'status'     => 'paid'
                ]
            );
        });

        return redirect()->route('my.orders')->with('success', 'Payment Successful! RuPay / UPI payment approved.');
    }
}
```

---

### 6.5 Frontend Razorpay & RuPay Modal Checkout (Blade View)

Create `resources/views/front/razorpay-checkout.blade.php`:

```html
@extends('front.layouts.app')

@section('content')
<section class="section-padding text-center py-5">
    <div class="container">
        <div class="card p-5 shadow-sm mx-auto" style="max-width: 620px; border-radius: 12px; background: #fff;">
            <h3>Secure Checkout</h3>
            <p class="text-muted">Event: <strong>{{ $event->title }}</strong></p>
            <p>Tickets: <strong>{{ $booking->tickets }}</strong></p>
            <h4 class="text-success my-3">Total Amount: ₹{{ number_format($totalInr, 2) }}</h4>
            <p class="small text-muted mb-4">(Converted from ${{ $booking->total_amount }} USD @ ₹{{ config('app.usd_to_inr_rate') }}/$)</p>

            <!-- Pay Now Button -->
            <button id="rzp-button" class="btn btn-primary btn-lg w-100 py-3" style="font-weight: 600; font-size: 18px; background: #4f46e5; border: none; border-radius: 8px;">
                <i class="fa fa-lock me-2"></i> Pay ₹{{ number_format($totalInr, 2) }} with RuPay / UPI / Cards
            </button>

            <!-- Hidden Verification Form -->
            <form id="razorpay-form" action="{{ route('razorpay.verify') }}" method="POST" style="display:none;">
                @csrf
                <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
                <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
                <input type="hidden" id="razorpay_signature" name="razorpay_signature">
            </form>
        </div>
    </div>
</section>

<!-- Razorpay Official Checkout Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const options = {
        key: "{{ $razorpayKey }}",
        amount: "{{ $amountInPaise }}",
        currency: "INR",
        name: "Evenza Events",
        description: "Tickets for {{ $event->title }}",
        image: "{{ asset('assets/img/logo/logo.png') }}",
        order_id: "{{ $razorpayOrder['id'] }}",
        handler: function (response) {
            document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;
            document.getElementById('razorpay-form').submit();
        },
        prefill: {
            name: "{{ $booking->name }}",
            email: "{{ $booking->email }}",
            contact: "{{ $booking->mobile }}"
        },
        notes: {
            booking_id: "{{ $booking->id }}"
        },
        theme: {
            color: "#4f46e5"
        },
        method: {
            card: true,        // Full support for RuPay, Visa, Mastercard
            upi: true,         // UPI QR, Google Pay, PhonePe, Paytm
            netbanking: true,  // All major Indian banks
            wallet: true
        }
    };

    const rzp = new Razorpay(options);

    rzp.on('payment.failed', function (response) {
        alert("Payment Failed: " + response.error.description);
    });

    document.getElementById('rzp-button').onclick = function (e) {
        rzp.open();
        e.preventDefault();
    };

    // Auto-launch checkout modal on page load
    window.onload = function() {
        rzp.open();
    };
</script>
@endsection
```

---

### 6.6 Route Declarations in `routes/web.php`

Register payment routes in `routes/web.php`:

```php
use App\Http\Controllers\PaymentController;

Route::post('/payment/razorpay/initiate', [PaymentController::class, 'initiatePayment'])->name('razorpay.initiate');
Route::post('/payment/razorpay/verify', [PaymentController::class, 'verifyPayment'])->name('razorpay.verify');
```

In `resources/views/front/booking.blade.php`:
Add **RuPay / UPI / Online Payment (Razorpay)** to the payment method select dropdown:
```html
<option value="razorpay">RuPay / UPI / Online Payment (Razorpay)</option>
```
When `razorpay` is selected, submit to `{{ route('razorpay.initiate') }}`.

---

### 6.7 Webhook Handler (For Edge Cases & Network Drops)

If a user closes their browser tab before the client JavaScript submits the verification form, Razorpay Webhooks ensure the payment is still credited.

1. Exempt `/webhook/razorpay` from CSRF in `app/Http/Middleware/VerifyCsrfToken.php`:
   ```php
   protected $except = [
       'webhook/razorpay',
   ];
   ```
2. In `routes/api.php` or `routes/web.php`:
   ```php
   Route::post('/webhook/razorpay', [PaymentController::class, 'handleWebhook']);
   ```
3. Webhook method in `PaymentController.php`:
   ```php
   public function handleWebhook(Request $request)
   {
       $payload = $request->getContent();
       $signature = $request->header('X-Razorpay-Signature');
       $secret = config('services.razorpay.webhook_secret');

       $expectedSignature = hash_hmac('sha256', $payload, $secret);

       if (hash_equals($expectedSignature, $signature)) {
           $data = json_decode($payload, true);
           if ($data['event'] === 'payment.captured') {
               $orderId = $data['payload']['payment']['entity']['order_id'];
               $paymentId = $data['payload']['payment']['entity']['id'];

               $booking = Booking::where('razorpay_order_id', $orderId)->first();
               if ($booking && $booking->payment_status !== 'paid') {
                   $booking->update([
                       'payment_status'      => 'paid',
                       'razorpay_payment_id' => $paymentId
                   ]);
               }
           }
           return response()->json(['status' => 'success']);
       }

       return response()->json(['error' => 'Invalid signature'], 400);
   }
   ```

---

## 7. Completed Features vs. Recommended New Feature Additions

### 7.1 Inventory of Already Completed Functions

The application currently has a solid functional foundation. Here is what is **already implemented and operational** in the codebase:

| Category | Completed Functions | Current Implementation Files |
| :--- | :--- | :--- |
| **User Authentication** | Registration, login with password hashing, session tracking, logout, and profile updates. | `front.php` (Lines 19–186), `register.blade.php`, `login.blade.php`, `updateprofile.blade.php` |
| **Admin Authentication** | Admin login, session validation, logout. | `admin.php` (Lines 16–56), `page-login.blade.php` |
| **Category Management** | Full CRUD: create categories, list all categories, edit names, delete categories. | `admin.php` (Lines 59–123), `category.blade.php`, `categorylist.blade.php` |
| **Speaker Management** | Full CRUD: add speaker with photo, designation, skills, and bio; edit and delete speakers; public team showcase. | `admin.php` (Lines 237–353), `front.php` (Lines 80–90), `team.blade.php`, `speaker-list.blade.php` |
| **Event Management** | Full CRUD: create events with banners, dates, times, venue details; edit, delete, and list events; public event details. | `admin.php` (Lines 124–236), `front.php` (Lines 41–59), `event.blade.php`, `event-details.blade.php` |
| **Booking Flow** | Booking form with attendee name, email, phone, ticket quantity selector, and payment method options. | `front.php` (Lines 188–253), `booking.blade.php` |
| **Order History** | Customer portal ("My Orders") displaying booked events, date, tickets, and status. | `front.php` (Lines 292–305), `my-orders.blade.php` |
| **PDF Generation** | PDF ticket download and PDF invoice download powered by Barryvdh DomPDF. | `front.php` (Lines 307–319), `InvoiceController.php` (Lines 42–55), `ticket.blade.php`, `invoice.blade.php` |
| **Admin Order Management** | View all customer bookings, delete bookings, manually approve offline/cash payments. | `admin.php` (Lines 354–380), `booking-list.blade.php` |
| **Admin Invoice Audit** | View all invoices, view detailed single invoice, delete invoices. | `InvoiceController.php` (Lines 56–74), `invoice_list.blade.php`, `invoice_view.blade.php` |

---

### 7.2 Specification of New Functions to Add

To evolve the project into a comprehensive, enterprise-ready event platform, the following **10 new functions** are recommended for implementation:

#### 1. Unique QR Code on PDF Tickets & Entry Check-in Scanner
* **Problem Solved**: Prevents duplicate entries and counterfeit ticket printing at event venues.
* **Implementation Plan**:
  1. Install QR Code package: `composer require simplesoftwareio/simple-qrcode`.
  2. Add `ticket_token` (UUID) and `checked_in_at` (nullable timestamp) to `bookings` table.
  3. Render QR code inside `resources/views/front/ticket.blade.php`:
     ```html
     <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->generate($booking->ticket_token)) !!} ">
     ```
  4. Create an entry scanner page (`/admin/scan-ticket`) with an HTML5 camera scanner (`html5-qrcode` library) that scans the QR code and calls `/admin/api/check-in` to mark the ticket as "Used".

#### 2. Automated Confirmation Email Delivery (Ticket & Invoice PDF Attachments)
* **Problem Solved**: Currently, users must stay on the webpage to download tickets; no confirmation emails are dispatched.
* **Implementation Plan**:
  1. Generate mailable: `php artisan make:mail BookingConfirmationMail`.
  2. In `app/Mail/BookingConfirmationMail.php`, attach generated DomPDF ticket and invoice:
     ```php
     public function build()
     {
         $pdfTicket = Pdf::loadView('front.ticket', ['booking' => $this->booking]);
         $pdfInvoice = Pdf::loadView('invoice', ['invoice' => $this->invoice]);

         return $this->subject('Booking Confirmed: ' . $this->booking->event->title)
                     ->view('emails.booking-confirmed')
                     ->attachData($pdfTicket->output(), 'ticket-' . $this->booking->id . '.pdf')
                     ->attachData($pdfInvoice->output(), 'invoice-' . $this->invoice->invoice_no . '.pdf');
     }
     ```
  3. Trigger `Mail::to($booking->email)->send(new BookingConfirmationMail($booking, $invoice))` upon payment completion.

#### 3. Tiered Ticket Pricing & Live Seat Inventory
* **Problem Solved**: Replaces the single hardcoded price with flexible tiers and prevents overbooking.
* **Implementation Plan**:
  1. Create a `ticket_tiers` table: `id`, `event_id`, `tier_name` (e.g. VIP, Standard, Early Bird), `price`, `total_seats`, `available_seats`.
  2. On the booking page, let customers select tier (e.g., VIP ₹4,999 vs Standard ₹1,499).
  3. Automatically mark an event as "Sold Out" and disable checkout when `available_seats == 0`.

#### 4. Frontend Event Search, Filter & Sorting
* **Problem Solved**: Allows attendees to quickly find relevant events by keyword, location, or category.
* **Implementation Plan**:
  1. In `FrontController::event(Request $request)`:
     ```php
     $query = EventModels::query();
     if ($request->filled('search')) {
         $query->where('title', 'like', '%' . $request->search . '%')
               ->orWhere('location', 'like', '%' . $request->search . '%');
     }
     if ($request->filled('category')) {
         $query->where('category', $request->category);
     }
     if ($request->filled('date_filter')) {
         if ($request->date_filter == 'today') $query->whereDate('date', today());
         if ($request->date_filter == 'weekend') $query->whereBetween('date', [now()->startOfWeek()->addDays(5), now()->endOfWeek()]);
     }
     $events = $query->paginate(9);
     ```

#### 5. Discount Coupons & Promotional Codes
* **Problem Solved**: Enables marketing promotions, partner codes, and seasonal discounts.
* **Implementation Plan**:
  1. Create `coupons` table: `code`, `discount_type` (percentage or fixed), `discount_value`, `expiry_date`, `max_uses`.
  2. Add an AJAX validation endpoint `/api/validate-coupon` that recalculates checkout totals before invoking Razorpay.

#### 6. Real-Time Admin Analytics & Revenue Dashboard
* **Problem Solved**: Replaces the empty admin welcome screen with actionable business metrics.
* **Implementation Plan**:
  1. In `AdminController::dashboard()`: calculate total revenue, ticket sales rate, monthly revenue comparisons, and top 5 highest-grossing events.
  2. In `admin/dashboard.blade.php`: render metric cards and Chart.js visualizations.

#### 7. Attendee List Export (CSV / Excel)
* **Problem Solved**: Provides event staff with printed or digital entry registers.
* **Implementation Plan**:
  1. Add an "Export Attendees" button on the Admin Booking List page (`/admin/export-attendees/{event_id}`).
  2. Stream a CSV file containing `Attendee Name`, `Email`, `Mobile`, `Tickets`, `Payment Status`, `Booking Date`.

#### 8. "Add to Google Calendar" & iCal Export
* **Problem Solved**: Increases attendance rates by letting users add event reminders with one click.
* **Implementation Plan**:
  1. Provide a Google Calendar link on the event details page and confirmation screen:
     ```
     https://calendar.google.com/calendar/render?action=TEMPLATE&text={Title}&dates={StartDate}/{EndDate}&details={Description}&location={Location}
     ```

#### 9. Ticket Cancellation & Refund Workflow
* **Problem Solved**: Allows customers to request cancellations and admins to process refunds without manual bank transfers.
* **Implementation Plan**:
  1. Add a "Request Cancellation" button on `my-orders.blade.php`.
  2. Admin approves cancellation, which automatically triggers a refund via Razorpay's Refund API:
     ```php
     $this->api->payment->fetch($booking->razorpay_payment_id)->refund();
     $booking->update(['payment_status' => 'refunded']);
     ```

#### 10. Customer Profile Avatar & Secure Password Update
* **Problem Solved**: Gives users full account management capabilities with profile picture upload and old-password verification.

---

## 8. Step-by-Step Implementation Roadmap & Priority Matrix

| Priority | Task | Affected Files | Effort |
| :---: | :--- | :--- | :---: |
| **P0** | **Fix Mass Assignment**: Add `'payment_status'` to `$fillable` | `app/Models/Booking.php` | 5 mins |
| **P0** | **Secure Admin Routes**: Implement `AdminAuthMiddleware` and apply to route group | `app/Http/Middleware/AdminAuthMiddleware.php`, `routes/web.php` | 15 mins |
| **P0** | **Secure Password Reset**: Remove unauthenticated direct password updates | `app/Http/Controllers/admin.php`, `front.php` | 30 mins |
| **P1** | **Live Razorpay & RuPay Integration**: Install SDK, order creation, HMAC verification | `PaymentController.php`, `razorpay-checkout.blade.php`, `routes/web.php` | 45 mins |
| **P1** | **Currency Conversion (USD to INR)**: Configurable exchange rate helper (`$29 -> ₹2,421.50`) | `CurrencyHelper.php`, `config/app.php`, `.env` | 20 mins |
| **P1** | **Fix HTTP Verbs**: Change delete/approve routes from `GET` to `DELETE` and `POST` | `routes/web.php`, `admin/*.blade.php` | 20 mins |
| **P1** | **Prevent IDOR**: Add ownership checks to ticket and invoice downloads | `front.php`, `InvoiceController.php` | 15 mins |
| **P1** | **Dynamic Event Pricing**: Replace hardcoded `$29` with `event->price` | Migrations, `EventModels.php`, `front.php`, views | 30 mins |
| **P2** | **DomPDF Compatibility**: Convert ticket layout to HTML tables | `resources/views/front/ticket.blade.php` | 25 mins |
| **P2** | **Ticket QR Code & Entry Scanner**: Unique QR on ticket PDF & gate check-in page | `ticket.blade.php`, `admin/scan-ticket.blade.php` | 40 mins |
| **P2** | **Automated Confirmation Emails**: Send tickets & invoices via Laravel Mailable | `app/Mail/BookingConfirmationMail.php`, `PaymentController.php` | 35 mins |
| **P2** | **Admin Analytics Dashboard**: Stat cards, revenue charts (Chart.js) | `admin.php::dashboard()`, `dashboard.blade.php` | 30 mins |
| **P2** | **Foreign Key Migration**: Link events to `category_id` and `speaker_id` | Migrations, `EventModels.php`, `front.php` | 40 mins |
| **P2** | **Service Layer Refactoring**: Move invoice creation out of `front.php` | `app/Services/InvoiceService.php`, `front.php` | 20 mins |
| **P3** | **Event Search & Filters**: Keyword search, category, and date range filters | `front.php::event()`, `event.blade.php` | 30 mins |
| **P3** | **Discount Coupons System**: Promo code creation and checkout validation | `CouponController.php`, `booking.blade.php` | 40 mins |
| **P3** | **Attendee CSV Export**: One-click attendee register download | `admin/booking-list.blade.php`, `AdminController.php` | 20 mins |
| **P3** | **PSR-4 Code Cleanup**: Rename controllers and models to standard naming conventions | `app/Http/Controllers/*`, `app/Models/*`, `routes/web.php` | 30 mins |

---

## 9. Master Actionable Implementation Checklist (Phase-by-Phase)

Use this step-by-step interactive checklist to track progress when applying fixes and building new features.

---

### Phase 1: Critical Security & Core Bug Fixes (P0)

- [x] **Fix 1.1: Booking Mass Assignment Bug**
  - **File**: `app/Models/Booking.php`
  - **Action**: Add `'payment_status'` to the `$fillable` array.
  - **Verification**: Verified added to `$fillable`.

- [x] **Fix 1.2: Admin Authentication Middleware**
  - **File**: `app/Http/Middleware/AdminAuthMiddleware.php`
  - **Action**: Created `AdminAuthMiddleware` with session verification.
  - **File**: `app/Http/Kernel.php`
  - **Action**: Registered `'admin.auth' => \App\Http\Middleware\AdminAuthMiddleware::class`.
  - **File**: `routes/web.php`
  - **Action**: Grouped all administrative routes under `middleware(['admin.auth'])`.

- [x] **Fix 1.3: Secure Password Reset**
  - **File**: `app/Http/Controllers/admin.php` & `front.php`
  - **Action**: Added session validation and input validation for password updates.

- [x] **Fix 1.4: Convert Destructive HTTP GET Routes to DELETE and POST**
  - **File**: `routes/web.php`
  - **Action**: Configured DELETE / POST method matching for category, event, speaker deletion, and payment approvals.
  - **File**: `resources/views/admin/*.blade.php`
  - **Action**: Converted delete and approve links to inline POST/DELETE forms with `@csrf` and `@method('DELETE')` while keeping exact visual button styling.

- [x] **Fix 1.5: Prevent IDOR on Ticket & Invoice Downloads**
  - **File**: `app/Http/Controllers/front.php` (`downloadTicket`)
  - **File**: `app/Http/Controllers/InvoiceController.php` (`download`)
  - **Action**: Added user ownership check ensuring only the booking owner or an admin can access tickets/invoices.

---

### Phase 2: Payment Gateway & Currency Conversion (Razorpay & RuPay) (P1)

- [x] **Task 2.1 & 2.2: Configure Currency Settings & API Credentials**
  - **File**: `.env` & `config/services.php`
  - **Action**: Configured `APP_CURRENCY=INR`, `APP_CURRENCY_SYMBOL="₹"`, `USD_TO_INR_RATE=83.50`, and Razorpay keys.

- [x] **Task 2.3: Currency Conversion Helper**
  - **File**: `app/Helpers/CurrencyHelper.php`
  - **Action**: Created helper with `convertUsdToInr()`, `formatInr()`, and `toPaise()` methods.

- [x] **Task 2.4: Payment Tracking Database Migration**
  - **File**: `database/migrations/2026_06_01_000000_add_razorpay_fields_to_bookings_table.php`
  - **Action**: Added `currency`, `amount_inr`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`.
  - **File**: `app/Models/Booking.php`: Added new fields to `$fillable`.

- [x] **Task 2.5: Create Payment Controller**
  - **File**: `app/Http/Controllers/PaymentController.php`
  - **Action**: Implemented order creation, HMAC SHA-256 signature verification, and atomic invoice issuing.

- [x] **Task 2.6: Frontend Checkout Modal View**
  - **File**: `resources/views/front/razorpay-checkout.blade.php`: Razorpay & RuPay checkout with 100% same-to-same design.
  - **File**: `resources/views/front/booking.blade.php`: Added "RuPay / UPI / Cards (Razorpay)" option.

- [x] **Task 2.7: Webhook Handling & CSRF Exception**
  - **File**: `app/Http/Middleware/VerifyCsrfToken.php`: Added `webhook/razorpay` to `$except`.
  - **File**: `routes/web.php`: Registered `/razorpay/verify` and `/webhook/razorpay`.

---

### Phase 3: Database & Relational Architecture Fixes (P1 & P2)

- [x] **Task 3.1: Dynamic Event Pricing & Capacity Migration**
  - **File**: `database/migrations/2026_06_02_000000_add_price_and_capacity_to_events_table.php`
  - **File**: `app/Models/EventModels.php`: Added `'price'`, `'capacity'` to `$fillable`.
  - **File**: `resources/views/admin/page-event.blade.php` & `editevent.blade.php`: Added Price and Capacity input fields.
  - **File**: `resources/views/front/event-details.blade.php` & `card-payment.blade.php`: Replaced hardcoded $29 with dynamic pricing.

- [x] **Task 3.3: Configure Eloquent Relationships**
  - **File**: `app/Models/EventModels.php`: Added `bookings()` relation.
  - **File**: `app/Models/Booking.php`: Added `event()`, `user()`, `invoice()` relations.
  - **File**: `app/Models/User.php`: Added `bookings()`, `invoices()` relations.

- [x] **Task 3.5: Atomic Database Transactions**
  - **File**: `app/Http/Controllers/PaymentController.php` & `front.php`
  - **Action**: Wrapped booking and invoice generation inside `DB::transaction(...)`.

- [x] **Task 3.6: Fix DomPDF Table Compatibility**
  - **File**: `resources/views/front/ticket.blade.php`
  - **Action**: Replaced CSS Flexbox with HTML `<table>` elements and inline styles.

---

### Phase 4: Advanced Features Implementation (P2 & P3)

- [x] **Task 4.3: Real-Time Admin Analytics Dashboard**
  - **File**: `app/Http/Controllers/admin.php` (`dashboard` method)
  - **Action**: Passed Total Revenue, Total Bookings, Active Events, Registered Users, and Recent Bookings.
  - **File**: `resources/views/admin/dashboard.blade.php`: Built stats cards and recent bookings table.

- [x] **Task 4.4: Frontend Search, Category & Date Filters**
  - **File**: `app/Http/Controllers/front.php` (`event` method)
  - **Action**: Added query filters for keyword search, category, and date.
  - **File**: `resources/views/front/event.blade.php`: Added search filter bar matching existing theme.

- [x] **Task 4.5: Attendee List Export (CSV / Excel)**
  - **File**: `app/Http/Controllers/admin.php`: Implemented `exportBookings()` returning CSV stream.
  - **File**: `resources/views/admin/booking-list.blade.php`: Added "Export CSV" button.

- [x] **Task 4.7: "Add to Google Calendar" One-Click Integration**
  - **File**: `resources/views/front/event-details.blade.php`: Added one-click Google Calendar button.

- [ ] **Task 4.6: Discount Coupons & Promotional Codes System**
  - **Command**: `php artisan make:model Coupon -m`
  - **Action**: Add schema: `code`, `discount_type`, `discount_value`, `expiry_date`, `max_uses`.
  - **File**: `resources/views/front/booking.blade.php`: Add promo code field and AJAX validation endpoint.

- [ ] **Task 4.7: "Add to Google Calendar" One-Click Integration**
  - **File**: `resources/views/front/event-details.blade.php` & `my-orders.blade.php`
  - **Action**: Add URL link formatting event start date, end date, title, and venue.

- [ ] **Task 4.8: Ticket Cancellation & Refund Workflow**
  - **File**: `resources/views/front/my-orders.blade.php`: Add "Request Cancellation" button.
  - **File**: `app/Http/Controllers/admin.php`: Implement refund approval calling Razorpay Refund API.

---

### Phase 5: Code Modernization & PSR-4 Refactoring (P3)

> [!NOTE]
> **Adherence to Core Mandate**: Phase 5 refactoring is **strictly optional** and secondary to functional stability. If the project objective is to preserve the exact existing structure and prevent regressions, maintain existing file names (`front.php`, `admin.php`, `EventModels.php`) and existing template includes without altering the codebase architecture.

- [ ] **Task 5.1: Controller & Model Renaming (Optional - verify backwards compatibility)**
  - **Action**: Rename `app/Http/Controllers/front.php` -> `FrontController.php` (`class FrontController`).
  - **Action**: Rename `app/Http/Controllers/admin.php` -> `AdminController.php` (`class AdminController`).
  - **Action**: Rename `app/Models/EventModels.php` -> `Event.php` (`class Event`).
  - **Action**: Rename `app/Models/AdminModels.php` -> `Admin.php` (`class Admin`).
  - **Action**: Rename `app/Models/speaker.php` -> `Speaker.php` (`class Speaker`).
  - **Action**: Delete unused empty file `app/Models/frontmodel.php`.
  - **File**: `routes/web.php`: Update all controller class references.

- [ ] **Task 5.2: Decouple Controllers via Service Layer**
  - **File**: `app/Services/InvoiceService.php`
  - **Action**: Move invoice numbering and creation logic to `InvoiceService`.
  - **Action**: Inject `InvoiceService` into `PaymentController` and `InvoiceController`.

- [ ] **Task 5.3: Storage Disk Cleanup for Image Uploads**
  - **File**: `AdminController.php`
  - **Action**: Replace `move(public_path(...))` with `Storage::disk('public')->putFile(...)`.
  - **Action**: Add `Storage::disk('public')->delete(...)` when records are updated or deleted.

- [ ] **Task 5.4: Blade Layout Inheritance**
  - **File**: `resources/views/layouts/admin.blade.php` & `resources/views/layouts/front.blade.php`
  - **Action**: Create master layouts with `@yield('content')`.
  - **File**: Refactor child views to use `@extends('layouts.admin')` and `@section('content')`.

---

### Phase 6: Production Hardening & Pre-Deployment Verification

- [ ] **Task 6.1: Environment Configuration Check**
  - Set `APP_ENV=production` and `APP_DEBUG=false` in `.env`.
  - Generate fresh application key: `php artisan key:generate`.

- [ ] **Task 6.2: Cache Optimization Commands**
  - Run `php artisan config:cache`
  - Run `php artisan route:cache`
  - Run `php artisan view:cache`
  - Run `php artisan event:cache`

- [ ] **Task 6.3: Storage Link**
  - Run `php artisan storage:link` to enable public access to storage disk assets.

- [ ] **Task 6.4: End-to-End Verification**
  - [ ] Customer registers account.
  - [ ] Customer searches for an event and views details.
  - [ ] Customer books ticket with RuPay/UPI/Card via Razorpay modal in INR (₹).
  - [ ] Signature verifies and booking status updates to `'paid'`.
  - [ ] Automated confirmation email arrives with PDF ticket (including QR code) and PDF invoice attached.
  - [ ] Customer visits "My Orders" and successfully downloads ticket.
  - [ ] Admin logs in with `admin.auth` middleware protection.
  - [ ] Admin views revenue analytics on dashboard.
  - [ ] Admin scans ticket QR code at gate; ticket marked as checked-in.



