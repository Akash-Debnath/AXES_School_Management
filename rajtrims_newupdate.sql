-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2022 at 08:38 AM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajtrims_newupdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `academiccouncils`
--

CREATE TABLE `academiccouncils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academiccouncils`
--

INSERT INTO `academiccouncils` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Chairman', 'Professor Dr. Mohammad Shahjahan Ali', 'aliaciu@yahoo.com', 'Vice-Chancellor\r\nRabindra Maitree University', '202205280618shahjahan_ali.png', '2022-05-28 10:18:58', '2022-05-28 10:18:58'),
(11, 'Member', 'Professor Dr. Md. Shahidur Rahman', 'shahidur@rmu.ac.bd', 'Department of Bengali\r\n Rabindra Maitree University', '202205280633shadiur rahman.jpg', '2022-05-28 10:33:42', '2022-05-28 10:33:42'),
(12, 'Member', 'Professor Dr. Mohammad Johurul Islam', 'johurul1974@yahoo.co.in', 'Department of Law, Islamic University, Kushtia', '202205280641Johurul Islam.jpg', '2022-05-28 10:41:08', '2022-05-28 10:41:08'),
(13, 'Member', 'Professor Dr. Abu Syed Mohammad Ali', 'pro.dr.asmali131973@gmail.com', 'Department of Arabic Language and Literature\r\n   Islamic University, Kushtia', '202205280643Abu Sayed Mohammad Ali.jpg', '2022-05-28 10:43:43', '2022-05-28 10:43:43'),
(14, 'Member', 'Professor Dr. Halima Khatun', 'khatundrhalima@yahoo.com', 'Department of Law, Islamic University', '202205280645Halima Khatun.jpg', '2022-05-28 10:45:13', '2022-05-28 10:45:13'),
(15, 'Member', 'Professor Dr. Md. Anowar Hossain', 'haqueanwarul41@yahoo.com', 'University of Dhaka', '202205280757Prof-Anwar-Hossain.jpg', '2022-05-28 11:57:14', '2022-05-28 11:57:14'),
(16, 'Member', 'Professor Dr.Mohammad Mamoon', 'treasurer@rmu.ac.bd', 'Treasurer', '202205280800Professor Dr.Mohammad Mamoon.jpg', '2022-05-28 12:00:00', '2022-05-28 12:00:00'),
(17, 'Member Secretary', 'Dr. Most. Ismat Ara Khatun', 'registrar@rmu.ac.bd', 'Registrar (In Charge) Rabindra Maitree university Kushtia', '202205280801Dr. Most. Ismat Ara Khatu.jpg', '2022-05-28 12:01:26', '2022-05-28 12:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `accountclasses`
--

CREATE TABLE `accountclasses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountclasses`
--

INSERT INTO `accountclasses` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Assets', 'Accounts represent the different types of economic resources owned or controlled by an entity. Common examples of asset accounts are cash in hand, cash in bank, real estate, inventory, prepaid expenses, goodwill, and accounts receivable.', '2022-09-01 15:37:57', '2022-09-01 15:37:57'),
(5, 'Liabilities', 'Accounts represent the different types of economic obligations of an entity, such as accounts payable, bank loans, bonds payable, and accrued expenses.', '2022-09-01 15:38:41', '2022-09-01 15:38:41'),
(6, 'Owner\'s Equity', 'Accounts represent the residual equity of an entity (the value of assets after deducting the value of all liabilities). Equity accounts include common stock, paid-in capital, and retained earnings. The type and captions used for equity accounts are d', '2022-09-01 15:39:06', '2022-09-01 15:39:06'),
(7, 'Expenses', 'Accounts represent the company\'s expenditures. Common examples are utilities, rents, depreciation, interest, and insurance.', '2022-09-01 15:39:32', '2022-09-01 15:39:32'),
(8, 'Revenue', 'Accounts represent the company\'s earnings and common examples include sales, service revenue and interest income.', '2022-09-01 15:40:05', '2022-09-01 15:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `accountgroups`
--

CREATE TABLE `accountgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountgroups`
--

INSERT INTO `accountgroups` (`id`, `clid`, `name`, `description`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(5, '4', 'Non Current Assets', 'Noncurrent assets are depreciated in order to spread the cost of the asset over the time that it is used; its useful life. Noncurrent assets are not depreciated in order to represent a new value or a replacement value but simply to allocate the cost of the asset over a period of time.', NULL, NULL, '2022-09-01 15:49:29', '2022-09-01 15:49:29'),
(6, '4', 'Current Assets', 'A current asset is any asset that will provide an economic benefit for or within one year. Depreciation refers to an accounting practice that expenses the cost of an item in regular intervals over its useful life. Since depreciation works to devalue items over periods longer than a year, it is not a current asset.', NULL, NULL, '2022-09-01 15:50:40', '2022-09-01 15:50:40'),
(7, '6', 'Owners\' Equity', 'Since depreciation is an important expense on the income statement, it impacts owner\'s equity through net income, which in turn impacts retained earnings. The higher the depreciation expense, the lower the net income, the lower the retained earnings and thus the lower the owner\'s equity.', NULL, NULL, '2022-09-01 15:51:30', '2022-09-01 15:51:30'),
(8, '5', 'Non Current Liabilities', 'Noncurrent liabilities are business\'s long-term financial obligations that are not due within the following twelve month period.', NULL, NULL, '2022-09-01 15:52:34', '2022-09-01 15:52:34'),
(9, '5', 'Current Liabilities', 'Current liabilities are always payable to outsiders , where depreciation is a charge against profit but never paid to anyone rather kept by the business entity', NULL, NULL, '2022-09-01 15:55:51', '2022-09-01 15:55:51'),
(10, '8', 'Operating Revenue', 'Operating revenue is the revenue that a company generates from its primary business activities. For example, a retailer produces its operating revenue through merchandise sales; a physician derives their operating revenue from the medical services that they provide.', NULL, NULL, '2022-09-01 15:57:57', '2022-09-01 15:57:57'),
(11, '8', 'Non Operating Revenue', 'Nonoperating revenues are the amounts earned by a business which are outside of its main or central operations. Nonoperating revenues are also described as incidental or peripheral. A common example is a retailer\'s investment income or interest income.', NULL, NULL, '2022-09-01 15:59:15', '2022-09-01 15:59:15'),
(12, '7', 'Direct Expense', 'Direct expense is an expense incurred that varies directly with changes in the volume of a cost object. A cost object is any item for which you are measuring expenses, such as products, product lines, services, sales regions, employees, and customers.', NULL, NULL, '2022-09-01 16:00:12', '2022-09-01 16:00:12'),
(13, '7', 'Indirect Expenses', 'Indirect expenses are those expenses that are incurred to operate a business as a whole or a segment of a business, and so cannot be directly associated with a cost object, such as a product, service, or customer. A cost object is any item for which you are separately measuring costs.', NULL, NULL, '2022-09-01 16:01:01', '2022-09-01 16:01:01'),
(14, '4', 'Fixed Assets', 'Fixed assets are items that a company plans to use over the long term to help generate income. Fixed assets are most commonly referred to as property, plant, and equipment. Current assets are any assets that are expected to be converted to cash or used within a year', NULL, NULL, '2022-09-01 16:01:50', '2022-09-01 16:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `accountjournaldetails`
--

CREATE TABLE `accountjournaldetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jid` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_sub_group_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_ledger_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_amount` double(16,2) DEFAULT NULL,
  `credit_amount` double(16,2) DEFAULT NULL,
  `credit_ledger_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_sub_group_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountjournaldetails`
--

INSERT INTO `accountjournaldetails` (`id`, `jid`, `debit_sub_group_id`, `debit_ledger_id`, `debit_amount`, `credit_amount`, `credit_ledger_id`, `credit_sub_group_id`, `cheque_no`, `cheque_date`, `ref`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(1, 'JOU132205', '1', 'SU_5', 1000.00, 1000.00, 'SU_5', 'LE_5', '12222222', '2022-05-13', 'oli', '1', NULL, NULL, NULL),
(2, 'JOU1522053', 'LE_5', 'SU_5', 1240.00, 1240.00, 'SU_5', 'LE_5', 'Note', '2022-05-05', '23456789', '1', NULL, NULL, NULL),
(3, 'JOU1822054', 'LE_5', 'SU_5', 5678.00, 5678.00, 'SU_5', 'LE_5', 'Note', '2022-05-17', '23456789', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountjournals`
--

CREATE TABLE `accountjournals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(16,2) NOT NULL,
  `date` date DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountjournals`
--

INSERT INTO `accountjournals` (`id`, `voucher_no`, `amount`, `date`, `note`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(4, 'JOU1522053', 54326.00, '2022-05-15', 'Accounts Setup  ->   Receive Voucher Create  ->  not  add', '1', NULL, NULL, NULL),
(5, 'JOU1822054', 7890.00, '2022-05-11', 'good for not', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountledgers`
--

CREATE TABLE `accountledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grp_id` int(11) NOT NULL,
  `sub_grp_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountledgers`
--

INSERT INTO `accountledgers` (`id`, `name`, `grp_id`, `sub_grp_id`, `description`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(6, 'Advance C&F Payment', 6, 49, 'Advance C&F Payment', NULL, NULL, '2022-09-11 23:24:02', '2022-09-11 23:24:02'),
(7, 'Advance Office Rent', 6, 33, 'Advance Office Rent', NULL, NULL, '2022-09-11 23:24:47', '2022-09-11 23:24:47'),
(8, 'Bank Charges (Operation)', 13, 19, 'Bank Charges (Operation)', NULL, NULL, '2022-09-11 23:28:09', '2022-09-11 23:28:09'),
(9, 'Bank Online Transaction Charge', 12, 16, 'Bank Online Transaction Charge', NULL, NULL, '2022-09-11 23:29:37', '2022-09-11 23:29:37'),
(10, 'Bank Tips', 12, 16, 'Bank Tips', NULL, NULL, '2022-09-11 23:30:16', '2022-09-11 23:30:16'),
(11, 'Capital', 7, 46, 'Capital', NULL, NULL, '2022-09-11 23:30:51', '2022-09-11 23:30:51'),
(12, 'Cash', 6, 15, 'Cash', NULL, NULL, '2022-09-11 23:31:20', '2022-09-11 23:31:20'),
(13, 'CNF Cost', 12, 12, 'CNF Cost', NULL, NULL, '2022-09-11 23:32:23', '2022-09-11 23:32:23'),
(14, 'Conveyances', 13, 32, 'Conveyances', NULL, NULL, '2022-09-11 23:33:12', '2022-09-11 23:33:12'),
(15, 'Delivery Expense', 13, 32, 'Delivery Expense', NULL, NULL, '2022-09-11 23:33:43', '2022-09-11 23:33:43'),
(16, 'Discount On Sales', 13, 44, 'Discount On Sales', NULL, NULL, '2022-09-11 23:34:17', '2022-09-11 23:34:17'),
(17, 'Dividend', 13, 8, 'Dividend', NULL, NULL, '2022-09-11 23:35:16', '2022-09-11 23:35:16'),
(18, 'Electricity Bills', 13, 32, 'Electricity Bills', NULL, NULL, '2022-09-11 23:36:11', '2022-09-11 23:36:11'),
(19, 'Event Management', 13, 32, 'Event Management', NULL, NULL, '2022-09-11 23:36:50', '2022-09-11 23:36:50'),
(20, 'Expenses Head', 13, 8, 'Expenses Head', NULL, NULL, '2022-09-11 23:37:36', '2022-09-11 23:37:36'),
(21, 'Festival Bonus', 13, 32, 'Festival Bonus', NULL, NULL, '2022-09-11 23:38:13', '2022-09-11 23:38:13'),
(22, 'Food, Lunch & Entertainments', 13, 32, 'Food, Lunch & Entertainments', NULL, NULL, '2022-09-11 23:38:51', '2022-09-11 23:38:51'),
(23, 'Internet & IT Expenses', 13, 32, 'Internet & IT Expenses', NULL, NULL, '2022-09-11 23:41:20', '2022-09-11 23:41:20'),
(24, 'Labour & Transportation', 12, 16, 'Labour & Transportation', NULL, NULL, '2022-09-11 23:55:14', '2022-09-11 23:55:14'),
(25, 'Licences & Renewals', 13, 8, 'Licences & Renewals', NULL, NULL, '2022-09-11 23:55:47', '2022-09-11 23:55:47'),
(26, 'Person', 7, 46, 'Person', NULL, NULL, '2022-09-11 23:57:10', '2022-09-11 23:57:10'),
(27, 'Miscellaneous Cost (Balance Adjustment)', 13, 32, 'Miscellaneous Cost (Balance Adjustment)', NULL, NULL, '2022-09-11 23:57:58', '2022-09-11 23:57:58'),
(28, 'Money Exchange Income', 11, 35, 'Money Exchange Income', NULL, NULL, '2022-09-12 00:04:13', '2022-09-12 00:04:13'),
(29, 'Office Decoration', 14, 20, 'Office Decoration', NULL, NULL, '2022-09-12 00:04:46', '2022-09-12 00:04:46'),
(30, 'Office Rent', 13, 32, 'Office Rent', NULL, NULL, '2022-09-12 00:05:18', '2022-09-12 00:05:18'),
(31, 'Office Stationeries', 13, 32, 'Office Stationeries', NULL, NULL, '2022-09-12 00:06:22', '2022-09-12 00:06:22'),
(32, 'Opening Balance', 7, 46, 'Opening Balance', NULL, NULL, '2022-09-12 00:07:18', '2022-09-12 00:07:18'),
(33, 'Printing Bill', 13, 8, 'Printing Bill', NULL, NULL, '2022-09-12 00:08:03', '2022-09-12 00:08:03'),
(34, 'Product Purchase Cost', 12, 16, 'Product Purchase Cost', NULL, NULL, '2022-09-12 00:09:18', '2022-09-12 00:09:18'),
(35, 'Profit On Loan', 13, 32, 'Profit On Loan', NULL, NULL, '2022-09-12 00:10:06', '2022-09-12 00:10:06'),
(36, 'Remuneration', 13, 8, 'Remuneration', NULL, NULL, '2022-09-12 00:10:40', '2022-09-12 00:10:40'),
(37, 'Retained Earnings', 7, 41, 'Retained Earnings', NULL, NULL, '2022-09-12 00:11:21', '2022-09-12 00:11:21'),
(38, 'Sales Commission', 12, 8, 'Sales Commission', NULL, NULL, '2022-09-12 00:11:46', '2022-09-12 00:11:46'),
(39, 'Sales Revenue', 10, 21, 'Sales Revenue', NULL, NULL, '2022-09-12 00:12:45', '2022-09-12 00:12:45'),
(40, 'Service Bill', 13, 32, 'Service Bill', NULL, NULL, '2022-09-12 00:13:26', '2022-09-12 00:13:26'),
(41, 'Telephones & Mobile Bill', 13, 8, 'Telephones & Mobile Bill', NULL, NULL, '2022-09-12 00:14:02', '2022-09-12 00:14:02'),
(42, 'Tips & Donations', 13, 8, 'Tips & Donations', NULL, NULL, '2022-09-12 00:14:34', '2022-09-12 00:14:34'),
(43, 'Water Bill', 13, 32, 'Water Bill', NULL, NULL, '2022-09-12 00:15:35', '2022-09-12 00:15:35'),
(44, 'World Class Cargo And Logistic', 9, 38, 'World Class Cargo And Logistic', NULL, NULL, '2022-09-12 00:30:29', '2022-09-12 00:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `accountpaymentdetails`
--

CREATE TABLE `accountpaymentdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `amount` double(16,2) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accountpayments`
--

CREATE TABLE `accountpayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `amount` double(16,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accountreceivedetails`
--

CREATE TABLE `accountreceivedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `revid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `amount` double(16,2) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountreceivedetails`
--

INSERT INTO `accountreceivedetails` (`id`, `revid`, `receive_to`, `receive_from`, `cheque_no`, `cheque_date`, `amount`, `ref`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(5, 'REV1822054', 'LE_5', 'CU_1', 'Note', '2022-05-11', 5678.00, '09876543', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountreceives`
--

CREATE TABLE `accountreceives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `amount` double(16,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountreceives`
--

INSERT INTO `accountreceives` (`id`, `voucher_no`, `date`, `amount`, `note`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(5, 'REV1822054', '2022-05-17', 4567.00, 'good for not', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountsubgroups`
--

CREATE TABLE `accountsubgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grp_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountsubgroups`
--

INSERT INTO `accountsubgroups` (`id`, `name`, `grp_id`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Account Payable', 9, 'Account Payable', '2022-09-01 16:06:58', '2022-09-01 16:06:58'),
(7, 'Account Receivables', 6, 'Account Receivables', '2022-09-01 16:07:40', '2022-09-01 16:07:40'),
(8, 'Administrative Expenses', 13, 'Administrative Expenses', '2022-09-01 16:08:03', '2022-09-01 16:08:03'),
(9, 'Advances, Deposits & Prepayment', 5, 'Advances, Deposits & Prepayment', '2022-09-01 16:08:34', '2022-09-01 16:08:34'),
(10, 'Bank & Over Draft', 8, 'Bank & Over Draft', '2022-09-01 16:09:33', '2022-09-01 16:09:33'),
(12, 'C & F Expenses', 12, 'C & F Expenses', '2022-09-01 16:11:10', '2022-09-01 16:11:10'),
(13, 'Cash At Bank', 6, 'Cash At Bank', '2022-09-01 16:11:38', '2022-09-01 16:11:38'),
(14, 'Cash At Mobile Account', 6, 'Cash At Mobile Account', '2022-09-01 16:12:06', '2022-09-01 16:12:06'),
(15, 'Cash In Hand', 6, 'Cash In Hand', '2022-09-01 16:12:35', '2022-09-01 16:12:35'),
(16, 'Cost Of Goods Sold', 12, 'Cost Of Goods Sold', '2022-09-01 16:12:57', '2022-09-01 16:12:57'),
(17, 'Customer Previous Balance', 5, 'Customer Previous Balance', '2022-09-01 16:13:39', '2022-09-01 16:13:39'),
(18, 'Drawings', 7, 'Drawings', '2022-09-01 16:13:58', '2022-09-01 16:13:58'),
(19, 'Financial Expense', 13, 'Financial Expense', '2022-09-01 16:14:26', '2022-09-01 16:14:26'),
(20, 'Furniture & Fixture', 14, 'Furniture & Fixture', '2022-09-01 16:15:31', '2022-09-01 16:15:31'),
(21, 'Goods Sales', 10, 'Goods Sales', '2022-09-01 16:15:59', '2022-09-01 16:15:59'),
(22, 'Incentive Income', 11, 'Incentive Income', '2022-09-01 16:16:32', '2022-09-01 16:16:32'),
(23, 'Institutional Borrowings', 8, 'Institutional Borrowings', '2022-09-01 16:17:25', '2022-09-01 16:17:25'),
(24, 'Intangible Assets', 5, 'Intangible Assets', '2022-09-01 16:18:33', '2022-09-01 16:18:33'),
(25, 'Interest Income', 11, 'Interest Income', '2022-09-01 16:18:56', '2022-09-01 16:18:56'),
(26, 'Inventory', 6, 'Inventory', '2022-09-01 16:19:32', '2022-09-01 16:19:32'),
(27, 'Investments', 5, 'Investments', '2022-09-01 16:20:26', '2022-09-01 16:20:26'),
(28, 'Liability For Expenses', 9, 'Liability For Expenses', '2022-09-01 16:22:00', '2022-09-01 16:22:00'),
(29, 'Liability For Other Finance', 9, 'Liability For Other Finance', '2022-09-01 16:23:00', '2022-09-01 16:23:00'),
(30, 'Loan Investment', 9, 'Loan Investment', '2022-09-01 16:23:30', '2022-09-01 16:23:30'),
(31, 'Long Term Borrowings', 8, 'Long Term Borrowings', '2022-09-01 16:23:55', '2022-09-01 16:23:55'),
(32, 'Operating Expenses', 13, 'Operating Expenses', '2022-09-01 16:24:19', '2022-09-01 16:24:19'),
(33, 'Other Current Assets', 6, 'Other Current Assets', '2022-09-01 16:24:38', '2022-09-01 16:24:38'),
(34, 'Other Current Liabilities', 9, 'Other Current Liabilities', '2022-09-01 16:24:57', '2022-09-01 16:24:57'),
(35, 'Other Income', 11, 'Other Income', '2022-09-01 16:25:21', '2022-09-01 16:25:21'),
(36, 'Other Loan & Mortgage', 8, 'Other Loan & Mortgage', '2022-09-01 16:25:48', '2022-09-01 16:25:48'),
(37, 'Other Non Current Assets', 5, 'Other Non Current Assets', '2022-09-01 16:26:12', '2022-09-01 16:26:12'),
(38, 'Other Non Current Liabilities', 8, 'Other Non Current Liabilities', '2022-09-01 16:26:38', '2022-09-01 16:26:38'),
(39, 'Other Operating Sales', 10, 'Other Operating Sales', '2022-09-01 16:27:04', '2022-09-01 16:27:04'),
(40, 'Product Adjust', 12, 'Product Adjust', '2022-09-01 16:27:39', '2022-09-01 16:27:39'),
(41, 'Reserves & Surplus', 7, 'Reserves & Surplus', '2022-09-01 16:27:58', '2022-09-01 16:27:58'),
(42, 'Salaries,Wages & Allowance Pay', 9, 'Salaries,Wages & Allowance Pay', '2022-09-01 16:28:55', '2022-09-01 16:28:55'),
(43, 'Scrap Sales', 10, 'Scrap Sales', '2022-09-01 16:29:18', '2022-09-01 16:29:18'),
(44, 'Selling Expenses', 13, 'Selling Expenses', '2022-09-01 16:29:44', '2022-09-01 16:29:44'),
(45, 'Service Income', 11, 'Service Income', '2022-09-01 16:30:03', '2022-09-01 16:30:03'),
(46, 'Share Capital', 7, 'Share Capital', '2022-09-01 16:30:30', '2022-09-01 16:30:30'),
(47, 'Supplier Previous Balance', 9, 'Supplier Previous Balance', '2022-09-01 16:30:54', '2022-09-01 16:30:54'),
(48, 'Tangible Asset', 8, 'Tangible Asset', '2022-09-01 16:31:18', '2022-09-01 16:31:18'),
(49, 'Advance C&F Payment', 6, 'Advance C&F Payment', '2022-09-11 23:22:48', '2022-09-11 23:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `account_employee_salaries`
--

CREATE TABLE `account_employee_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_employee_salaries`
--

INSERT INTO `account_employee_salaries` (`id`, `employee_id`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-05', 10000, '2022-05-19 15:34:18', '2022-05-19 15:34:18'),
(2, 3, '2022-05', 15000, '2022-05-19 15:34:18', '2022-05-19 15:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `account_groups`
--

CREATE TABLE `account_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_other_costs`
--

CREATE TABLE `account_other_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_other_costs`
--

INSERT INTO `account_other_costs` (`id`, `date`, `amount`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2022-09-08', 5000, 'Description', '202205191135download.jpg', '2022-05-12 07:38:42', '2022-05-19 15:35:10'),
(2, '2022-05-17', 4320, 'Description', '202205180514download.jpg', '2022-05-18 09:14:34', '2022-05-18 09:14:34'),
(3, '2022-05-17', 4320, 'Description', '202205180651download.jpg', '2022-05-18 10:51:08', '2022-05-18 10:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `account_student_fees`
--

CREATE TABLE `account_student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_items`
--

CREATE TABLE `add_items` (
  `id` int(11) NOT NULL,
  `item_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `item_store_id` int(11) DEFAULT NULL,
  `item_supplier_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_item_stocks`
--

CREATE TABLE `add_item_stocks` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `symbol` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+',
  `store_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purchase_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'yes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

CREATE TABLE `administrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrations`
--

INSERT INTO `administrations` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Vice Chancellor', 'Professor Dr. Md. Shahjahan Ali', 'vc@rmu.ac.bd', 'B Com (Honours); M Com \r\n\r\nUniversity of Rajshahi\r\n\r\nFormer Head, Department of Accounting\r\n\r\nIslamic University, Kushtia\r\n\r\nFormer, Dean, Faculty of Business\r\n\r\nIslamic University, Kushtia\r\nFormer Treasurer, Islamic University, Kushtia', '202204130333shahjahan_ali.png', '2022-04-13 07:33:30', '2022-04-13 07:33:30'),
(2, 'Treasurer', 'Professor Dr.Mohammad Mamoon', 'treasurer@rmu.ac.bd', 'Dean Faculty of Humanities & Social Science,1990-1992\r\nRegistrar,Islamic University, Kushtia, 1996', '202204130335Untitled-1.jpg', '2022-04-13 07:35:47', '2022-04-13 07:35:47'),
(3, 'Registrar', 'Dr. Most. Ismat Ara Khatun', 'registrar@rmu.ac.bd', 'hD, MPhil. \r\nIslamic University\r\nMA, BA (Honours) \r\nIslamic History, University of Rajshahi', '20220413034123674726_1938222626500426_2949920022879691204_o.jpg', '2022-04-13 07:41:29', '2022-04-13 07:41:29'),
(4, 'Controller of Exams', 'Muhammad Nurul Islam', 'rmuexamdivison@gmail.com', 'Former Deputy Registrar (Academic) \r\n\r\nIslamic University, Kushtia', '202204130354Nurul islam.jpg', '2022-04-13 07:54:35', '2022-04-13 07:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `admissionenquiries`
--

CREATE TABLE `admissionenquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissionenquiries`
--

INSERT INTO `admissionenquiries` (`id`, `name`, `phone`, `email`, `address`, `description`, `note`, `date`, `next_date`, `assign`, `reference`, `source`, `student_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'azmain abedin', '017125466544', 'add@gmail.com', '77 lalkhan', 'Good for Everything', 'Good Note', '2022-06-23', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-09 20:47:12', '2022-06-09 21:07:54'),
(3, 'md chowdhury', '9176343573', 'md@gmail.com', '84-04,170 th street', 'Today Our University Closes at 8pm.', 'kamal sir phone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11 21:35:00', '2022-06-11 21:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `assignvehicles`
--

CREATE TABLE `assignvehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignvehicles`
--

INSERT INTO `assignvehicles` (`id`, `route_name`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(6, 'kamlapur', 'kusakaL84513', '2022-06-10 09:25:23', '2022-06-10 09:25:51'),
(7, 'kamlapur', 'dhakaL84513', '2022-06-12 10:24:01', '2022-06-12 10:24:01'),
(8, 'mohammmadpur to uittara', 'kkhulna-7875556', '2022-06-12 10:24:11', '2022-06-12 10:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `assign_class_teachers`
--

CREATE TABLE `assign_class_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `added_by` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_class_teachers`
--

INSERT INTO `assign_class_teachers` (`id`, `teacher_id`, `department_id`, `program_id`, `class_id`, `batch_id`, `section_id`, `subject_id`, `added_by`, `created_at`, `updated_at`) VALUES
(2, '1', '2', '3', '14', NULL, NULL, 1, '1', '2022-05-13 08:38:14', '2022-05-13 08:38:14'),
(3, '2', '9', '2', '8', NULL, NULL, 3, '1', '2022-05-13 09:36:55', '2022-05-13 09:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `faculty_id`, `dept_id`, `semester`, `batch_id`, `created_at`, `updated_at`) VALUES
(21, 17, '1-5-1', 7, 16, 16, 1, 2, 5, 'Spring', '1', '2022-06-20 10:12:44', '2022-06-20 10:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(6, 6, 1, 100, 40, 90, '2022-05-16 17:39:35', '2022-05-16 17:39:35'),
(7, 6, 2, 100, 40, 90, '2022-05-16 17:39:35', '2022-05-16 17:39:35'),
(8, 6, 5, 100, 33, 100, '2022-05-16 17:39:35', '2022-05-16 17:39:35'),
(11, 17, 1, 100, 40, 90, '2022-08-23 12:39:23', '2022-08-23 12:39:23'),
(12, 17, 2, 100, 40, 90, '2022-08-23 12:39:23', '2022-08-23 12:39:23'),
(13, 18, 3, 100, 40, 90, '2022-08-23 12:40:12', '2022-08-23 12:40:12'),
(14, 16, 4, 100, 33, 60, '2022-08-23 12:40:31', '2022-08-23 12:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `bankaccounts`
--

CREATE TABLE `bankaccounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bbrname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bbrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bbrlocation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankaccounts`
--

INSERT INTO `bankaccounts` (`id`, `bid`, `acc_no`, `acc_title`, `bbrname`, `bbrcode`, `bbrlocation`, `debit`, `credit`, `balance`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(3, '1', '0998877554321', 'Account Title *', 'Branch Name *', 'Branch Code*23456789', 'Location', NULL, NULL, NULL, NULL, NULL, '2022-05-18 10:53:04', '2022-05-18 10:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `sort`, `name`, `bname`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(1, 'DBBL', 'Dutch Bangla Bank Limited', NULL, NULL, NULL, '2022-01-27 07:51:38', '2022-01-27 07:51:38'),
(3, 'yujhb', 'Hostel Nam', NULL, NULL, NULL, '2022-05-12 07:40:22', '2022-05-12 07:40:22'),
(4, 'C', 'C', NULL, NULL, NULL, '2022-05-13 13:09:09', '2022-05-13 13:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` float(12,2) DEFAULT NULL,
  `perunitcost` double(10,2) DEFAULT NULL,
  `postdate` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'yes',
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bots`
--

CREATE TABLE `bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `building_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `building_name`, `room_no`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Main Building', '444', 'nothing', '2022-04-26 14:27:44', '2022-04-26 14:27:44'),
(2, '01', '12', 'good room', '2022-05-18 19:58:26', '2022-05-18 19:58:26'),
(3, 'Academic vabon', '10', 'Description', '2022-07-17 08:13:26', '2022-07-17 08:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `class_time_tables`
--

CREATE TABLE `class_time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_time_tables`
--

INSERT INTO `class_time_tables` (`id`, `type`, `period`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Class', '2', '23:00', '12:30', '2022-04-27 11:33:32', '2022-04-27 11:33:32'),
(2, 'Class', 'Periods', '08:30', '12:30', '2022-05-13 08:36:34', '2022-05-13 08:36:34'),
(3, 'Class', 'Sat-Thu', '06:30', '00:00', '2022-05-18 19:55:59', '2022-05-18 19:55:59'),
(4, 'Class', 'Periods', '12:43', '12:32', '2022-05-26 20:43:33', '2022-05-26 20:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `complaint_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_taken` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaintcoms`
--

CREATE TABLE `complaintcoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaintcoms`
--

INSERT INTO `complaintcoms` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Convener', 'Dr. Most. Ismat Ara Khatun', 'registrar@rmu.ac.bd', 'Registrar (In Charge)\r\nRabindra Maitree University', '202205280832Dr. Most. Ismat Ara Khatu.jpg', '2022-05-28 12:32:12', '2022-05-28 12:32:12'),
(6, 'Member', 'Iffat Jahan Heera', 'iffatjahanheera@gmail.com', 'Lecturer , Rabindra Maitree University', '20220528083811156355_923704130994602_270399519053265229_n.jpg', '2022-05-28 12:38:39', '2022-05-28 12:38:39'),
(7, 'Member', 'Mr. S M Hasibur Rashid', 'thasibur@rmu.ac.bd', 'Senior  Lecturer', '202205280843271643616_4829964217049124_6404306663286974082_n.jpg', '2022-05-28 12:43:43', '2022-05-28 12:43:43'),
(8, 'Member', 'Professor Dr. Halima Khatun', 'khatundrhalima@yahoo.com', 'Department of Law,\r\nIslamic University', '202205280846Halima Khatun.jpg', '2022-05-28 12:46:38', '2022-05-28 12:46:38'),
(9, 'Member', 'Advocate Srabonti Mukharjee', 'anamit08@gmail.com', 'District Project Officer\r\nIRSOP, BLAST, Kushtia Unit\r\n Judge Court Kushtia', '202205280850rmu2021-03-23-06-41-49199434.jpg', '2022-05-28 12:50:00', '2022-05-28 12:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(5, 'Rabindra Maitree University', '97/71, Ram Chandra Roy Chowdhury Street\r\nCourtpara, Kushtia- 7000, Bangladesh\r\n', 'info@rmu.ac.bd', 'Mobile: +88 01319 446230', '2022-06-27 01:51:14', '2022-06-27 01:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Mohammad Anamul Huq', 'anamit08@gmail.com', NULL, 'MlM software customization', 'hello', '2022-07-01 07:34:51', NULL),
(13, 'Stevesag', 'evalid.atortest@gmail.com', NULL, 'Aloha', 'Salut, ech wollt Are Prais wessen.', '2022-07-18 12:03:35', NULL),
(16, 'Crytowopsy', 'penny7@zoominternet.net', NULL, 'Find out about the fastest way for a financial independence.', 'Financial robot is a great way to manage and increase your income. https://Mab.rbertilsson.se/', '2022-08-11 12:31:15', NULL),
(17, 'Crytowopsy', 'mikedasilva9@yahoo.com', NULL, 'Only one click can grow up your money really fast.', 'We know how to make our future rich and do you? https://Mab.rbertilsson.se/', '2022-08-12 16:43:55', NULL),
(18, 'Crytowopsy', 'nyshouster@aol.com', NULL, 'The financial Robot is your # 1 expert of making money.', 'Try out the best financial robot in the Internet. https://Mab.rbertilsson.se/', '2022-08-13 20:54:33', NULL),
(19, 'Crytowopsy', 'almarie03@yahoo.com', NULL, 'The huge income without investments is available, now!', 'Even a child knows how to make $100 today with the help of this robot. https://Mab.rbertilsson.se/', '2022-08-15 01:04:59', NULL),
(20, 'Crytowopsy', 'doug.roberts.reo@gmail.com', NULL, 'Thousands of bucks are guaranteed if you use this robot.', 'Join the society of successful people who make money here. https://Mab.rbertilsson.se/', '2022-08-16 04:37:50', NULL),
(21, 'Crytowopsy', 'lalitayokasing@yahoo.com', NULL, 'Additional income is now available for anyone all around the world.', 'Check out the new financial tool, which can make you rich. https://Mab.rbertilsson.se/', '2022-08-16 13:30:02', NULL),
(22, 'Crytowopsy', 'oliverosgelle@yahoo.com', NULL, 'Everyone can earn as much as he wants suing this Bot.', 'Financial robot is your success formula is found. Learn more about it. https://Mab.rbertilsson.se/', '2022-08-16 15:41:00', NULL),
(23, 'Crytowopsy', 'allison_soroka@hotmail.com', NULL, 'The financial Robot works for you even when you sleep.', 'Need money? Get it here easily! Just press this to launch the robot. https://Mab.rbertilsson.se/', '2022-08-16 17:51:05', NULL),
(24, 'Crytowopsy', 'fr.i.sk.bur.nj.o.j.j.e@gmail.com', NULL, 'Check out the newest way to make a fantastic profit.', 'Your computer can bring you additional income if you use this Robot. https://Mab.rbertilsson.se/', '2022-08-16 20:05:02', NULL),
(25, 'Crytowopsy', 'k.truesdale@comcast.net', NULL, 'Launch the financial Robot and do your business.', 'Start your online work using the financial Robot. https://Mab.rbertilsson.se/', '2022-08-16 22:14:06', NULL),
(26, 'Crytowopsy', 'Rexmanred@live.com', NULL, 'Rich people are rich because they use this robot.', 'This robot can bring you money 24/7. https://Mab.rbertilsson.se/', '2022-08-17 00:23:38', NULL),
(27, 'Crytowopsy', 'darlene_tew@pinkinbox.org', NULL, 'Automatic robot is the best start for financial independence.', 'Earning $1000 a day is easy if you use this financial Robot. https://Mab.rbertilsson.se/', '2022-08-17 02:36:15', NULL),
(28, 'Crytowopsy', 'Markvi56@further-details.com', NULL, 'Need money? Earn it without leaving your home.', 'Attention! Here you can earn money online! https://Mab.rbertilsson.se/', '2022-08-17 04:51:48', NULL),
(29, 'Crytowopsy', 'genieslater@spamavert.com', NULL, 'Financial robot is a great way to manage and increase your income.', 'Need money? The financial robot is your solution. https://Mab.rbertilsson.se/', '2022-08-17 07:04:23', NULL),
(30, 'Crytowopsy', 'r_faddy_v@hotmail.com', NULL, 'Making money is very easy if you use the financial Robot.', 'Financial robot is a great way to manage and increase your income. https://Mab.rbertilsson.se/', '2022-08-17 09:16:27', NULL),
(31, 'Crytowopsy', 'octbnovember2009@yahoo.com', NULL, 'No need to work anymore while you have the Robot launched!', 'Just one click can turn you dollar into $1000. https://Mab.rbertilsson.se/', '2022-08-17 11:30:45', NULL),
(32, 'Crytowopsy', 'michel.markmichel.mark013@gmail.com', NULL, 'Only one click can grow up your money really fast.', 'Financial independence is what this robot guarantees. https://Mab.rbertilsson.se/', '2022-08-17 13:44:59', NULL),
(33, 'Crytowopsy', 'richie@roomertravel.com', NULL, 'Let the Robot bring you money while you rest.', 'Start your online work using the financial Robot. https://Mab.rbertilsson.se/', '2022-08-17 16:21:39', NULL),
(34, 'Crytowopsy', 'zjtowner@gmail.com', NULL, 'Looking for an easy way to make money? Check out the financial robot.', 'Still not a millionaire? The financial robot will make you him! https://Mab.rbertilsson.se/', '2022-08-17 18:30:53', NULL),
(35, 'Crytowopsy', 'chevy3962000@msn.com', NULL, 'Small investments can bring tons of dollars fast.', 'Have no financial skills? Let Robot make money for you. https://Mab.rbertilsson.se/', '2022-08-17 20:39:34', NULL),
(36, 'Crytowopsy', 'supervewns@fromru.com', NULL, 'Check out the newest way to make a fantastic profit.', 'Attention! Here you can earn money online! https://Mab.rbertilsson.se/', '2022-08-17 22:49:31', NULL),
(37, 'Crytowopsy', 'qyusem@optonline.net', NULL, 'This robot can bring you money 24/7.', 'Using this Robot is the best way to make you rich. https://Mab.rbertilsson.se/', '2022-08-18 01:04:27', NULL),
(38, 'Crytowopsy', 'taylorelysea@gmail.com', NULL, 'Start making thousands of dollars every week.', 'Learn how to make hundreds of backs each day. https://Mab.rbertilsson.se/', '2022-08-18 07:35:38', NULL),
(39, 'Crytowopsy', 'vollcour@hotmail.com', NULL, 'No worries if you are fired. Work online.', 'Trust the financial Bot to become rich. https://Mab.rbertilsson.se/', '2022-08-18 09:48:17', NULL),
(40, 'Crytowopsy', 'ca_yogesh93@ymail.com', NULL, 'Make money online, staying at home this cold winter.', 'Try out the automatic robot to keep earning all day long. https://Mab.rbertilsson.se/', '2022-08-18 11:58:43', NULL),
(41, 'Shanna', 'a.steinmetz@loeber-steinmetz.de', NULL, 'rmu.ac.bd', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\n\r\nOur clinical-grade TENS technology will ensure you have neck relief in as little as 20 minutes.\r\n\r\nGet Yours: https://hineck.shop\r\n\r\nEnjoy,\r\n\r\nShanna\r\nrmu.ac.bd', '2022-08-18 12:08:33', NULL),
(42, 'Crytowopsy', 'carman.jenna@yahoo.com', NULL, 'Launch the financial Bot now to start earning.', 'The huge income without investments is available. https://Mab.rbertilsson.se/', '2022-08-18 14:29:59', NULL),
(43, 'Crytowopsy', '@aol.com', NULL, 'Only one click can grow up your money really fast.', 'Have no money? Earn it online. https://Mab.rbertilsson.se/', '2022-08-18 16:58:33', NULL),
(44, 'Crytowopsy', 'shb@hctc.net', NULL, 'The online job can bring you a fantastic profit.', 'We know how to make our future rich and do you? https://Mab.rbertilsson.se/', '2022-08-18 19:08:38', NULL),
(45, 'Crytowopsy', 'pamelar49@gmail.com', NULL, 'The financial Robot is your future wealth and independence.', 'Your money work even when you sleep. https://Mab.rbertilsson.se/', '2022-08-18 21:21:04', NULL),
(46, 'Crytowopsy', 'dsmentusa@gmail.com', NULL, 'Turn $1 into $100 instantly. Use the financial Robot.', 'No worries if you are fired. Work online. https://Mab.rbertilsson.se/', '2022-08-18 23:30:48', NULL),
(47, 'Crytowopsy', 'twaner_08@yahoo.com', NULL, 'Make thousands every week working online here.', 'Make your money work for you all day long. https://Mab.escueladelcambio.es/', '2022-08-19 01:40:54', NULL),
(48, 'Crytowopsy', 'stephen_privett@yahoo.com', NULL, 'The additional income for everyone.', 'The fastest way to make your wallet thick is found. https://Mab.escueladelcambio.es/', '2022-08-19 03:51:32', NULL),
(49, 'Crytowopsy', 'M.ic.k.e.y.Va.r.e.s.k.o.6.4.9@gmail.com', NULL, 'Need money? Get it here easily! Just press this to launch the robot.', 'Looking forward for income? Get it online. https://Mab.escueladelcambio.es/', '2022-08-19 06:03:37', NULL),
(50, 'Crytowopsy', 'duckyfuzz956@yahoo.com', NULL, 'Only one click can grow up your money really fast.', 'Start your online work using the financial Robot. https://Mab.escueladelcambio.es/', '2022-08-19 08:14:29', NULL),
(51, 'Crytowopsy', 'bayern19@yahoo.com', NULL, 'No need to worry about the future if your use this financial robot.', 'The financial Robot is your # 1 expert of making money. https://Mab.escueladelcambio.es/', '2022-08-19 10:25:24', NULL),
(52, 'Crytowopsy', 'elias_el_khoury@hotmail.com', NULL, 'The fastest way to make you wallet thick is here.', 'The financial Robot works for you even when you sleep. https://Mab.escueladelcambio.es/', '2022-08-19 12:37:00', NULL),
(53, 'Crytowopsy', 'rodriguez_mbr@hotmail.com', NULL, 'Make money 24/7 without any efforts and skills.', 'The success formula is found. Learn more about it. https://Mab.escueladelcambio.es/', '2022-08-19 14:49:45', NULL),
(54, 'Crytowopsy', 'msmercyme@hotmail.com', NULL, 'Your money work even when you sleep.', 'Feel free to buy everything you want with the additional income. https://Mab.escueladelcambio.es/', '2022-08-19 17:02:40', NULL),
(55, 'Crytowopsy', 'mrdodd27@yahoo.com', NULL, 'No need to stay awake all night long to earn money. Launch the robot.', 'This robot can bring you money 24/7. https://Mab.escueladelcambio.es/', '2022-08-19 19:15:20', NULL),
(56, 'Crytowopsy', 'sprtwmn1971@yahoo.com', NULL, 'Make money 24/7 without any efforts and skills.', 'Need some more money? Robot will earn them really fast. https://Mab.escueladelcambio.es/', '2022-08-19 21:27:51', NULL),
(57, 'Crytowopsy', 'rferreira.us@gmail.com', NULL, 'Try out the automatic robot to keep earning all day long.', 'Make money in the internet using this Bot. It really works! https://Mab.escueladelcambio.es/', '2022-08-19 23:38:18', NULL),
(58, 'Crytowopsy', 'trodriguez@crowell.com', NULL, 'Need some more money? Robot will earn them really fast.', 'Everyone can earn as much as he wants now. https://Mab.escueladelcambio.es/', '2022-08-20 01:48:04', NULL),
(59, 'Crytowopsy', 'parrishmichaela31@yahoo.com', NULL, 'Using this Robot is the best way to make you rich.', 'The huge income without investments is available, now! https://Mab.escueladelcambio.es/', '2022-08-20 03:59:57', NULL),
(60, 'Crytowopsy', 'fmmnuggetbot@outlook.com', NULL, 'Using this Robot is the best way to make you rich.', 'This robot will help you to make hundreds of dollars each day. https://Mab.escueladelcambio.es/', '2022-08-20 06:13:16', NULL),
(61, 'Crytowopsy', 'feiying08342@126.com', NULL, 'No worries if you are fired. Work online.', 'Thousands of bucks are guaranteed if you use this robot. https://Mab.escueladelcambio.es/', '2022-08-20 08:27:11', NULL),
(62, 'Crytowopsy', 'bhill@hughes.net', NULL, 'Earning money in the Internet is easy if you use Robot.', 'Launch the financial Robot and do your business. https://Mab.escueladelcambio.es/', '2022-08-20 10:40:42', NULL),
(63, 'Crytowopsy', 'raneez007@hotmail.com', NULL, 'Making money is very easy if you use the financial Robot.', 'Earn additional money without efforts. https://Mab.escueladelcambio.es/', '2022-08-20 12:53:28', NULL),
(64, 'Crytowopsy', 'japarker@branchserv.com', NULL, 'Buy everything you want earning money online.', 'Earn additional money without efforts. https://Mab.escueladelcambio.es/', '2022-08-20 15:07:25', NULL),
(65, 'Crytowopsy', 'getserious00@aol.com', NULL, 'Online earnings are the easiest way for financial independence.', 'Robot is the best way for everyone who looks for financial independence. https://Mab.escueladelcambio.es/', '2022-08-20 17:19:12', NULL),
(66, 'Crytowopsy', 'cherrymalabimba@yahoo.com', NULL, 'Looking forward for income? Get it online.', 'Earning $1000 a day is easy if you use this financial Robot. https://Mab.escueladelcambio.es/', '2022-08-20 19:37:10', NULL),
(67, 'Crytowopsy', 'davidjamesatkins@gmail.com', NULL, 'Even a child knows how to make money. Do you?', 'Online earnings are the easiest way for financial independence. https://Mab.escueladelcambio.es/', '2022-08-20 21:50:06', NULL),
(68, 'Crytowopsy', 'reychild70@ovi.com', NULL, 'This robot will help you to make hundreds of dollars each day.', 'Everyone can earn as much as he wants suing this Bot. https://Mab.escueladelcambio.es/', '2022-08-21 00:12:47', NULL),
(69, 'Crytowopsy', 'abeljean@live.com', NULL, 'Online Bot will bring you wealth and satisfaction.', 'Making money is very easy if you use the financial Robot. https://Mab.escueladelcambio.es/', '2022-08-21 02:33:44', NULL),
(70, 'Crytowopsy', 'Biesenthal54108@gmail.com', NULL, 'Make thousands every week working online here.', 'Thousands of bucks are guaranteed if you use this robot. https://Mab.escueladelcambio.es/', '2022-08-21 04:51:07', NULL),
(71, 'Crytowopsy', 'alexander.legion@yahoo.com', NULL, 'Financial robot guarantees everyone stability and income.', 'Learn how to make hundreds of backs each day. https://Mab.escueladelcambio.es/', '2022-08-21 07:08:37', NULL),
(72, 'Crytowopsy', 'stonerforpresident@gmail.com', NULL, 'Need money? The financial robot is your solution.', 'Let the Robot bring you money while you rest. https://Mab.escueladelcambio.es/', '2022-08-21 09:23:41', NULL),
(73, 'Crytowopsy', 'wasondiao@hotmail.com', NULL, '# 1 financial expert in the net! Check out the new Robot.', 'Your computer can bring you additional income if you use this Robot. https://Mab.escueladelcambio.es/', '2022-08-21 11:42:08', NULL),
(74, 'Crytowopsy', 'prismadigital07@hotmail.com', NULL, 'We know how to increase your financial stability.', 'Financial robot is a great way to manage and increase your income. https://Mab.escueladelcambio.es/', '2022-08-21 13:56:25', NULL),
(75, 'Crytowopsy', 'saray_1418@hotmail.com', NULL, 'Online earnings are the easiest way for financial independence.', 'Learn how to make hundreds of backs each day. https://Mab.escueladelcambio.es/', '2022-08-21 16:14:36', NULL),
(76, 'Crytowopsy', 'MIKE24830@HOTMAIL.COM', NULL, 'Watch your money grow while you invest with the Robot.', '# 1 financial expert in the net! Check out the new Robot. https://Mab.escueladelcambio.es/', '2022-08-21 18:31:26', NULL),
(77, 'Crytowopsy', 'Catcooney@yahoo.com', NULL, 'Financial robot is a great way to manage and increase your income.', 'Make thousands of bucks. Pay nothing. https://Mab.escueladelcambio.es/', '2022-08-21 20:48:15', NULL),
(78, 'Crytowopsy', 'eemppuu@hotmail.com', NULL, 'No need to work anymore. Just launch the robot.', 'Financial robot guarantees everyone stability and income. https://Mab.escueladelcambio.es/', '2022-08-21 23:09:52', NULL),
(79, 'Crytowopsy', 'davidpatrickmartin@yahoo.com', NULL, 'Check out the newest way to make a fantastic profit.', 'Making money in the net is easier now. https://Mab.escueladelcambio.es/', '2022-08-22 01:32:11', NULL),
(80, 'Crytowopsy', 'cw_gt500@yahoo.com', NULL, 'The online income is your key to success.', 'One click of the robot can bring you thousands of bucks. https://Mab.escueladelcambio.es/', '2022-08-22 03:47:13', NULL),
(81, 'Crytowopsy', 'gpr_129-2005@yahoo.com', NULL, 'Money, money! Make more money with financial robot!', 'Make thousands of bucks. Financial robot will help you to do it! https://Mab.escueladelcambio.es/', '2022-08-22 06:05:13', NULL),
(82, 'Crytowopsy', 'shideye@msn.com', NULL, 'There is no need to look for a job anymore. Work online.', 'Making money can be extremely easy if you use this Robot. https://Mab.escueladelcambio.es/', '2022-08-22 08:22:00', NULL),
(83, 'Crytowopsy', 'ueworir@163.com', NULL, 'Money, money! Make more money with financial robot!', 'The online income is the easiest ways to make you dream come true. https://Mab.escueladelcambio.es/', '2022-08-22 10:37:51', NULL),
(84, 'Crytowopsy', 'hayrettinkom@hotmail.com', NULL, 'Have no money? Earn it online.', 'Your money work even when you sleep. http://go.tazalus.com/096s', '2022-08-22 12:55:36', NULL),
(85, 'Crytowopsy', 'f_14tomcat87@hotmail.com', NULL, 'Still not a millionaire? The financial robot will make you him!', 'Make your money work for you all day long. http://go.tazalus.com/096s', '2022-08-22 15:07:42', NULL),
(86, 'Crytowopsy', 'eightazqwqnn176@yahoo.com', NULL, 'Launch the best investment instrument to start making money today.', 'The success formula is found. Learn more about it. http://go.tazalus.com/096s', '2022-08-22 17:18:43', NULL),
(87, 'Crytowopsy', 'sjkrutsch@cox.net', NULL, 'This robot can bring you money 24/7.', 'Let the financial Robot be your companion in the financial market. http://go.tazalus.com/096s', '2022-08-22 19:35:38', NULL),
(88, 'Crytowopsy', 'rs05gnx3042@gmail.com', NULL, 'One click of the robot can bring you thousands of bucks.', 'Have no money? It’s easy to earn them online here. http://go.tazalus.com/096s', '2022-08-22 21:48:41', NULL),
(89, 'Crytowopsy', 'erika_lara15@yahoo.com', NULL, 'Earn additional money without efforts.', 'Make money online, staying at home this cold winter. http://go.tazalus.com/096s', '2022-08-23 00:03:57', NULL),
(90, 'Crytowopsy', 'gibbsjl4@yahoo.com', NULL, 'Everyone can earn as much as he wants suing this Bot.', 'Learn how to make hundreds of backs each day. http://go.tazalus.com/096s', '2022-08-23 02:16:37', NULL),
(91, 'Crytowopsy', 'misty_brown2001@yahoo.com', NULL, 'See how Robot makes $1000 from $1 of investment.', 'Earning $1000 a day is easy if you use this financial Robot. http://go.tazalus.com/096s', '2022-08-23 04:31:07', NULL),
(92, 'Crytowopsy', 'lynderson46@att.net', NULL, 'Have no money? It’s easy to earn them online here.', 'Everyone can earn as much as he wants suing this Bot. http://go.tazalus.com/096s', '2022-08-23 06:44:31', NULL),
(93, 'Crytowopsy', 'mdrafeeq.a@hotmail.com', NULL, 'Make thousands of bucks. Pay nothing.', 'The financial Robot is the most effective financial tool in the net! http://go.tazalus.com/096s', '2022-08-23 08:56:18', NULL),
(94, 'Crytowopsy', 'shunley115@aol.com', NULL, 'See how Robot makes $1000 from $1 of investment.', '# 1 financial expert in the net! Check out the new Robot. http://go.tazalus.com/096s', '2022-08-23 11:07:07', NULL),
(95, 'Crytowopsy', 'blasted_heath@yahoo.com', NULL, 'There is no need to look for a job anymore. Work online.', 'Need money? Get it here easily? http://go.tazalus.com/096s', '2022-08-23 13:16:39', NULL),
(96, 'Crytowopsy', 'omgfatkids@hotmail.com', NULL, 'Start making thousands of dollars every week.', 'Most successful people already use Robot. Do you? http://go.tazalus.com/096s', '2022-08-23 15:26:34', NULL),
(97, 'Crytowopsy', 'bebemo@gmail.com', NULL, 'We know how to make our future rich and do you?', 'Make thousands of bucks. Pay nothing. http://go.tazalus.com/096s', '2022-08-23 17:37:52', NULL),
(98, 'Crytowopsy', 'chavezrain@jeffersonbox.com', NULL, 'Need some more money? Robot will earn them really fast.', 'One click of the robot can bring you thousands of bucks. http://go.tazalus.com/096s', '2022-08-23 19:52:55', NULL),
(99, 'Crytowopsy', 'pensjonat.roh@gmail.com', NULL, 'Need money? The financial robot is your solution.', 'Looking forward for income? Get it online. http://go.tazalus.com/096s', '2022-08-23 22:02:07', NULL),
(100, 'Crytowopsy', 'jilllacey@ymail.com', NULL, 'Even a child knows how to make $100 today.', 'Rich people are rich because they use this robot. http://go.tazalus.com/096s', '2022-08-23 22:11:35', NULL),
(101, 'Crytowopsy', 'crash_punk_queen@yahoo.com', NULL, 'The best online investment tool is found. Learn more!', 'Need money? Earn it without leaving your home. http://go.tazalus.com/096s', '2022-08-24 00:19:50', NULL),
(102, 'Crytowopsy', 'charukrish.krish@gmail.com', NULL, 'Using this Robot is the best way to make you rich.', 'The financial Robot is your future wealth and independence. http://go.tazalus.com/096s', '2022-08-24 02:31:22', NULL),
(103, 'Crytowopsy', '2938409ikslkdjiofw@yahoo.com', NULL, 'Online job can be really effective if you use this Robot.', 'The additional income for everyone. http://go.tazalus.com/096s', '2022-08-24 04:37:14', NULL),
(104, 'Crytowopsy', 'dominiquemiddlebrook63@yahoo.com', NULL, 'Online Bot will bring you wealth and satisfaction.', 'Financial independence is what this robot guarantees. http://go.tazalus.com/096s', '2022-08-24 06:48:39', NULL),
(105, 'Crytowopsy', 'missnikole@hotmail.com', NULL, 'Looking for an easy way to make money? Check out the financial robot.', 'Make money, not war! Financial Robot is what you need. http://go.tazalus.com/096s', '2022-08-24 08:59:12', NULL),
(106, 'Crytowopsy', 'jhuscroft@yahoo.com', NULL, 'Need cash? Launch this robot and see what it can.', 'Make money 24/7 without any efforts and skills. http://go.tazalus.com/096s', '2022-08-24 11:08:36', NULL),
(107, 'Crytowopsy', 'newmds@gmail.com', NULL, 'Using this Robot is the best way to make you rich.', 'Even a child knows how to make money. This robot is what you need! http://go.tazalus.com/096s', '2022-08-24 13:20:54', NULL),
(108, 'Eric Jones', 'ericjonesmyemail@gmail.com', NULL, 'Instead, congrats', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with rajtrims.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out rajtrims.com.\r\n\r\nCLICK HERE https://boostleadgeneration.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE https://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=rajtrims.com', '2022-08-25 15:40:16', NULL),
(109, 'Crytowopsywopsy', 'crazycarlos0@gmail.com', NULL, 'Make dollars staying at home and launched this Bot.', 'Just one click can turn you dollar into $1000. http://go.tazalus.com/0j0l', '2022-09-02 16:23:28', NULL),
(110, 'Crytowopsywopsy', 'boasplace@hotmail.com', NULL, 'Financial independence is what everyone needs.', 'Even a child knows how to make money. Do you? http://go.tazalus.com/0j0l', '2022-09-02 18:53:35', NULL),
(111, 'Crytowopsywopsy', 'ranievekpsrashida@hotmail.com', NULL, 'Join the society of successful people who make money here.', 'Check out the newest way to make a fantastic profit. http://go.tazalus.com/0j0l', '2022-09-02 21:22:51', NULL),
(112, 'Crytowopsywopsy', 'maynepyt@yahoo.com', NULL, 'The financial Robot is your # 1 expert of making money.', 'Everyone can earn as much as he wants suing this Bot. http://go.tazalus.com/0j0l', '2022-09-02 23:53:01', NULL),
(113, 'Crytowopsywopsy', 'marie.derosa@btinternet.com', NULL, 'Learn how to make hundreds of backs each day.', 'Launch the financial Robot and do your business. http://go.tazalus.com/0j0l', '2022-09-03 02:17:12', NULL),
(114, 'Crytowopsywopsy', 'Gbaby30989@aol.com', NULL, 'Making money is very easy if you use the financial Robot.', 'Let your money grow into the capital with this Robot. http://go.tazalus.com/0j0l', '2022-09-03 04:41:39', NULL),
(115, 'Crytowopsywopsy', 'uaonur_32@gmail.com', NULL, 'One click of the robot can bring you thousands of bucks.', 'Check out the automatic Bot, which works for you 24/7. http://go.tazalus.com/0j0l', '2022-09-03 07:09:51', NULL),
(116, 'Crytowopsywopsy', 'Kimberlyleeminor@gmail.com', NULL, 'Earn additional money without efforts.', 'Make money online, staying at home this cold winter. http://go.tazalus.com/0j0l', '2022-09-03 09:32:30', NULL),
(117, 'Crytowopsywopsy', 'randsintenn@charter.net', NULL, 'Financial independence is what everyone needs.', 'We have found the fastest way to be rich. Find it out here. http://go.tazalus.com/0j0l', '2022-09-03 12:02:47', NULL),
(118, 'Crytowopsywopsy', 'heavenstouchministry@yahoo.com', NULL, 'One click of the robot can bring you thousands of bucks.', 'Make your money work for you all day long. http://go.tazalus.com/0j0l', '2022-09-03 14:27:46', NULL),
(119, 'Crytowopsywopsy', 'sinshaprem@gmail.com', NULL, 'Need cash? Launch this robot and see what it can.', 'Earn additional money without efforts and skills. http://go.tazalus.com/0j0l', '2022-09-03 16:55:31', NULL),
(120, 'Crytowopsywopsy', 'shiprc@aol.com', NULL, 'Wow! This is a fastest way for a financial independence.', 'Wow! This is a fastest way for a financial independence. http://go.tazalus.com/0j0l', '2022-09-03 19:20:23', NULL),
(121, 'Crytowopsywopsy', 'c_peskett@hotmail.com', NULL, 'Financial Robot is #1 investment tool ever. Launch it!', 'Let the Robot bring you money while you rest. http://go.tazalus.com/0j0l', '2022-09-03 21:46:19', NULL),
(122, 'Crytowopsywopsy', 'primeiroanjo@hotmail.com', NULL, 'Try out the best financial robot in the Internet.', 'No need to stay awake all night long to earn money. Launch the robot. http://go.tazalus.com/0j0l', '2022-09-04 00:07:54', NULL),
(123, 'Crytowopsywopsy', 'failovays0887@hotmail.com', NULL, 'Financial Robot is #1 investment tool ever. Launch it!', 'Financial Robot is #1 investment tool ever. Launch it! http://go.tazalus.com/0j0l', '2022-09-04 02:33:54', NULL),
(124, 'Crytowopsywopsy', 'as.s.o.c.i.a.t.eq.ze.n@gmail.com', NULL, 'The huge income without investments is available.', 'Financial robot keeps bringing you money while you sleep. http://go.tazalus.com/0j0l', '2022-09-04 05:00:07', NULL),
(125, 'Crytowopsywopsy', 'pion609@gmail.com', NULL, 'Launch the robot and let it bring you money.', 'The financial Robot is your future wealth and independence. http://go.tazalus.com/0j0l', '2022-09-04 07:24:07', NULL),
(126, 'Crytowopsywopsy', 'aladdinsys@parquempresarial.com', NULL, 'No need to stay awake all night long to earn money. Launch the robot.', 'Find out about the fastest way for a financial independence. http://go.tazalus.com/0j0l', '2022-09-04 09:51:14', NULL),
(127, 'Crytowopsywopsy', 'RibcageRosie7@aol.com', NULL, 'Buy everything you want earning money online.', 'No worries if you are fired. Work online. http://go.tazalus.com/0j0l', '2022-09-04 12:12:36', NULL),
(128, 'Crytowopsywopsy', 'dnikoletseas@live.com', NULL, 'Let your money grow into the capital with this Robot.', 'Attention! Here you can earn money online! http://go.tygyguip.com/096s', '2022-09-04 15:03:58', NULL),
(129, 'Crytowopsywopsy', 'jockoussama@gmail.com', NULL, 'Everyone can earn as much as he wants now.', 'Need money? Get it here easily? http://go.tygyguip.com/096s', '2022-09-04 17:25:11', NULL),
(130, 'Crytowopsywopsy', 'kristincouillard@yahoo.com', NULL, 'The additional income for everyone.', 'Attention! Here you can earn money online! http://go.tygyguip.com/096s', '2022-09-04 19:47:19', NULL),
(131, 'Crytowopsywopsy', 'dl.jones5@gmail.com', NULL, 'The fastest way to make you wallet thick is here.', 'Most successful people already use Robot. Do you? https://emdn.cl/promo', '2022-09-04 22:10:06', NULL),
(132, 'Crytowopsywopsy', 'str8gamedogg@hotmail.com', NULL, 'Financial robot is a great way to manage and increase your income.', 'Using this Robot is the best way to make you rich. https://emdn.cl/promo', '2022-09-05 00:30:49', NULL),
(133, 'Crytowopsywopsy', 'bkmob08@aim.com', NULL, 'Using this Robot is the best way to make you rich.', 'We know how to increase your financial stability. https://emdn.cl/promo', '2022-09-05 02:48:12', NULL),
(134, 'Crytowopsywopsy', 'kericandler@gmail.com', NULL, 'Need money? Get it here easily?', 'The success formula is found. Learn more about it. https://emdn.cl/promo', '2022-09-05 05:11:24', NULL),
(135, 'Eric Jones', 'ericjonesmyemail@gmail.com', NULL, 'Cool website!', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - rajtrims.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across rajtrims.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://boostleadgeneration.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE https://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=rajtrims.com', '2022-09-05 05:49:29', NULL),
(136, 'Crytowopsywopsy', 'ballkimandfred@aol.com', NULL, 'This robot can bring you money 24/7.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://emdn.cl/promo', '2022-09-05 07:35:11', NULL),
(137, 'Crytowopsywopsy', 'h.ayleighuffelman@gmail.com', NULL, 'One dollar is nothing, but it can grow into $100 here.', 'Online earnings are the easiest way for financial independence. https://emdn.cl/promo', '2022-09-05 10:01:50', NULL),
(138, 'Crytowopsywopsy', 'Blemoine4809@yahoo.com', NULL, 'Trust the financial Bot to become rich.', 'Most successful people already use Robot. Do you? https://emdn.cl/promo', '2022-09-05 12:24:27', NULL),
(139, 'Crytowopsywopsy', 'deidre.beaudry@yahoo.com', NULL, 'Make money 24/7 without any efforts and skills.', 'Money, money! Make more money with financial robot! https://emdn.cl/promo', '2022-09-05 14:47:04', NULL),
(140, 'Crytowopsywopsy', 'Luosper621@cs.com', NULL, 'Find out about the fastest way for a financial independence.', 'Your money keep grow 24/7 if you use the financial Robot. https://emdn.cl/promo', '2022-09-05 17:13:05', NULL),
(141, 'Crytowopsywopsy', 'kfreervumby@gmail.com', NULL, 'Rich people are rich because they use this robot.', 'The financial Robot is the most effective financial tool in the net! https://tiendaskon.com.es/promo', '2022-09-05 19:44:07', NULL),
(142, 'Crytowopsywopsy', 'arismixt@gmail.com', NULL, 'Still not a millionaire? Fix it now!', 'Automatic robot is the best start for financial independence. https://tiendaskon.com.es/promo', '2022-09-05 22:12:11', NULL),
(143, 'Crytowopsywopsy', 'liddysmit1@yahoo.com', NULL, 'Need money? Get it here easily! Just press this to launch the robot.', 'The fastest way to make your wallet thick is found. https://tiendaskon.com.es/promo', '2022-09-06 00:36:48', NULL),
(144, 'Crytowopsywopsy', 'richarde66@mac.com', NULL, 'Watch your money grow while you invest with the Robot.', 'Online earnings are the easiest way for financial independence. https://tiendaskon.com.es/promo', '2022-09-06 03:04:54', NULL),
(145, 'Crytowopsywopsy', 'smvk853@yahoo.com', NULL, 'Financial independence is what everyone needs.', 'Check out the new financial tool, which can make you rich. https://tiendaskon.com.es/promo', '2022-09-06 05:29:11', NULL),
(146, 'Crytowopsywopsy', 'angieme@msn.com', NULL, 'Most successful people already use Robot. Do you?', 'The fastest way to make your wallet thick is found. https://tiendaskon.com.es/promo', '2022-09-06 07:54:56', NULL),
(147, 'Crytowopsywopsy', 'dabharvey@verizon.net', NULL, 'The additional income for everyone.', 'This robot can bring you money 24/7. https://tiendaskon.com.es/promo', '2022-09-06 10:29:20', NULL),
(148, 'Crytowopsywopsy', 'phichstyle54@windowslive.com', NULL, 'Earn additional money without efforts and skills.', 'There is no need to look for a job anymore. Work online. https://tiendaskon.com.es/promo', '2022-09-06 13:01:01', NULL),
(149, 'Crytowopsywopsy', 'CHRIS.TAYLOR.34@HOTMAIL.COM', NULL, 'Making money is very easy if you use the financial Robot.', 'Looking forward for income? Get it online. https://hierbalimon.es/promo', '2022-09-06 15:27:19', NULL),
(150, 'Crytowopsywopsy', 'silvermoonlight28@hotmail.com', NULL, 'No need to worry about the future if your use this financial robot.', 'Find out about the fastest way for a financial independence. https://hierbalimon.es/promo', '2022-09-06 17:57:49', NULL),
(151, 'Crytowopsywopsy', '1stepatatime@comcast.net', NULL, 'Let the Robot bring you money while you rest.', 'Online Bot will bring you wealth and satisfaction. https://hierbalimon.es/promo', '2022-09-06 20:22:01', NULL),
(152, 'Crytowopsywopsy', 'sarpongvadis@ymail.com', NULL, 'Only one click can grow up your money really fast.', 'We have found the fastest way to be rich. Find it out here. https://hierbalimon.es/promo', '2022-09-07 01:03:49', NULL),
(153, 'PhilipVat', 'mordvinovmilano+axtz@mail.ru', NULL, 'rajtrims.com ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggrgr', 'rajtrims.com ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggrgr', '2022-09-07 03:03:57', NULL),
(154, 'Crytowopsywopsy', 'russelldorado929@hotmail.com', NULL, 'Have no financial skills? Let Robot make money for you.', 'Make money online, staying at home this cold winter. https://hierbalimon.es/promo', '2022-09-07 03:32:39', NULL),
(155, 'Crytowopsywopsy', 'cjescobedo@gmail.com', NULL, 'The financial Robot is the most effective financial tool in the net!', 'The online income is your key to success. https://hierbalimon.es/promo', '2022-09-07 05:57:20', NULL),
(156, 'Crytowopsywopsy', 'hariton2009@gmail.com', NULL, 'We know how to become rich and do you?', 'The financial Robot is your future wealth and independence. https://hierbalimon.es/promo', '2022-09-07 08:23:19', NULL),
(157, 'Crytowopsywopsy', 'lauramansfield@gmail.com', NULL, 'Make money 24/7 without any efforts and skills.', 'The financial Robot works for you even when you sleep. https://hierbalimon.es/promo', '2022-09-07 10:47:56', NULL),
(158, 'Crytowopsywopsy', 'weturk1@yahoo.com', NULL, 'Make money online, staying at home this cold winter.', 'Financial robot is a great way to manage and increase your income. https://hierbalimon.es/promo', '2022-09-07 13:11:47', NULL),
(159, 'Crytowopsywopsy', 'bbwsmartass@yahoo.com', NULL, 'The financial Robot is your future wealth and independence.', 'Attention! Financial robot may bring you millions! https://bodyandsoul.com.es/promo', '2022-09-07 15:33:16', NULL),
(160, 'Crytowopsywopsy', 'designerbenefits@yahoo.com', NULL, 'Invest $1 today to make $1000 tomorrow.', 'Thousands of bucks are guaranteed if you use this robot. https://bodyandsoul.com.es/promo', '2022-09-07 18:06:56', NULL),
(161, 'Crytowopsywopsy', 'al.nag@gmx.net', NULL, 'Launch the robot and let it bring you money.', 'No need to worry about the future if your use this financial robot. https://bodyandsoul.com.es/promo', '2022-09-07 20:37:44', NULL),
(162, 'Crytowopsywopsy', 'bewt4nceosg@yahoo.com', NULL, 'No worries if you are fired. Work online.', 'We know how to become rich and do you? https://bodyandsoul.com.es/promo', '2022-09-07 23:02:51', NULL),
(163, 'Crytowopsywopsy', 'wdbishop2011@gmail.com', NULL, 'Just one click can turn you dollar into $1000.', 'Let the Robot bring you money while you rest. https://bodyandsoul.com.es/promo', '2022-09-08 03:50:56', NULL),
(164, 'Crytowopsywopsy', 'bhbelievesex@feeladult.com', NULL, 'No need to stay awake all night long to earn money. Launch the robot.', 'Wow! This is a fastest way for a financial independence. https://bodyandsoul.com.es/promo', '2022-09-08 06:12:24', NULL),
(165, 'Crytowopsywopsy', 'soph_a7x@hotmail.com', NULL, 'Let the Robot bring you money while you rest.', 'Only one click can grow up your money really fast. https://bodyandsoul.com.es/promo', '2022-09-08 08:38:00', NULL),
(166, 'Crytowopsywopsy', 't.i.nyw.in.g.s1.0.1org@gmail.com', NULL, 'No need to stay awake all night long to earn money. Launch the robot.', 'Earning money in the Internet is easy if you use Robot. https://bodyandsoul.com.es/promo', '2022-09-08 11:01:40', NULL),
(167, 'Crytowopsywopsy', 'signmenobody@yahoo.com', NULL, 'Feel free to buy everything you want with the additional income.', 'Need money? The financial robot is your solution. https://bodyandsoul.com.es/promo', '2022-09-08 13:26:40', NULL),
(168, 'Crytowopsywopsy', 'cfbeball00@aim.com', NULL, 'Find out about the easiest way of money earning.', 'Check out the automatic Bot, which works for you 24/7. https://puertobelenn.cl/promo', '2022-09-08 15:51:42', NULL),
(169, 'Crytowopsywopsy', 'oklahomajoe@gmail.com', NULL, 'Robot never sleeps. It makes money for you 24/7.', 'Let the financial Robot be your companion in the financial market. https://puertobelenn.cl/promo', '2022-09-08 18:12:36', NULL),
(170, 'Crytowopsywopsy', 'toreenawatkins@yahoo.com', NULL, 'Robot is the best way for everyone who looks for financial independence.', 'Start making thousands of dollars every week just using this robot. http://www.kae.edu.ee/postlogin?continue=https://puertobelenn.cl/promo', '2022-09-08 20:39:20', NULL),
(171, 'Crytowopsywopsy', 'hartman@voliacable.com', NULL, 'Invest $1 today to make $1000 tomorrow.', 'Wow! This is a fastest way for a financial independence. http://dbc.sa/Home/ChangeLanguage?lang=en-US&returnUrl=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-08 23:04:45', NULL),
(172, 'Crytowopsywopsy', 'schirops@gmail.com', NULL, 'The financial Robot works for you even when you sleep.', 'Start making thousands of dollars every week. http://matsuki.com.hk/Redirect.php?l=cnsc&url=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 01:30:53', NULL),
(173, 'Crytowopsywopsy', 'froggergirl64@yahoo.com', NULL, 'No need to stay awake all night long to earn money. Launch the robot.', 'Robot is the best way for everyone who looks for financial independence. http://www.allfutanari.com/dtr/link.php?id=fe444c&gr=1&url=https://puertobelenn.cl/promo', '2022-09-09 03:51:17', NULL),
(174, 'Crytowopsywopsy', 'sarahmhenderson@ymail.com', NULL, 'Find out about the easiest way of money earning.', 'No need to work anymore while you have the Robot launched! https://pnevmopodveska-club.ru/index.php?app=core&module=system&controller=redirect&do=redirect&url=https://puertobelenn.cl/promo', '2022-09-09 06:16:38', NULL),
(175, 'Crytowopsywopsy', 'cjahrew@hotmail.com', NULL, 'No need to work anymore while you have the Robot launched!', 'Attention! Financial robot may bring you millions! https://www.bigskymontananet.com/tosite.php?url=https%3A%2F%2Fpuertobelenn.cl%2Fpromo&pageid=2710', '2022-09-09 08:46:58', NULL),
(176, 'Crytowopsywopsy', 'julievorobyov@gmail.com', NULL, 'The additional income for everyone.', 'The success formula is found. Learn more about it. http://library.aiou.edu.pk/cgi-bin/koha/tracklinks.pl?uri=https://puertobelenn.cl/promo', '2022-09-09 11:19:01', NULL),
(177, 'Crytowopsywopsy', 'aqunovela@emailrtg.org', NULL, 'Launch the financial Robot and do your business.', 'Wow! This Robot is a great start for an online career. http://www.kitchencabinetsdirectory.com/redirect.asp?url=https://puertobelenn.cl/promo', '2022-09-09 13:49:06', NULL),
(178, 'Crytowopsywopsy', 'errinstevens@yahoo.com', NULL, 'Financial independence is what everyone needs.', 'The additional income is available for everyone using this robot. https://rightontimes.com/search/redir?i=306&q=dead%20vote&url=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 16:47:32', NULL),
(179, 'Crytowopsywopsy', 'cowgirlbabe10@yahoo.com', NULL, 'Earn additional money without efforts.', 'Rich people are rich because they use this robot. http://www.i-cube.cc/redirect.php?action=url&goto=puertobelenn.cl%2Fpromo&osCsid=022fc8f5466ef1d88b87cf107d28c578', '2022-09-09 19:22:11', NULL),
(180, 'Crytowopsywopsy', 'janefetter@verizon.net', NULL, 'The online job can bring you a fantastic profit.', 'Financial robot is the best companion of rich people. https://quehacerensantiago.cl/promo', '2022-09-10 00:31:57', NULL),
(181, 'Crytowopsywopsy', 'danpyongyang@tylerexpress.com', NULL, 'Invest $1 today to make $1000 tomorrow.', 'Even a child knows how to make money. This robot is what you need! https://quehacerensantiago.cl/promo', '2022-09-10 03:03:05', NULL),
(182, 'Crytowopsywopsy', 'bksivyer@msn.com', NULL, 'This robot can bring you money 24/7.', 'Thousands of bucks are guaranteed if you use this robot. https://quehacerensantiago.cl/promo', '2022-09-10 05:32:46', NULL),
(183, 'Crytowopsywopsy', 'sam_lacky99@yahoo.com', NULL, 'Just one click can turn you dollar into $1000.', 'Financial independence is what this robot guarantees. https://quehacerensantiago.cl/promo', '2022-09-10 10:31:58', NULL),
(184, 'Crytowopsywopsy', 'tomchattle@gmail.com', NULL, 'Make your laptop a financial instrument with this program.', 'The huge income without investments is available. https://quehacerensantiago.cl/promo', '2022-09-10 12:57:38', NULL),
(185, 'Crytowopsywopsy', 'cardsfarmhouse@btinternet.com', NULL, 'Buy everything you want earning money online.', 'Making money can be extremely easy if you use this Robot. https://quehacerensantiago.cl/promo', '2022-09-10 15:19:53', NULL),
(186, 'Crytowopsywopsy', 'g.l.o.n.isekgaoxd18@gmail.com', NULL, 'Small investments can bring tons of dollars fast.', 'Make your computer to be you earning instrument. http://an.to/?go=https://varatradgardsforening.se/promo', '2022-09-10 17:44:40', NULL),
(187, 'Crytowopsywopsy', 'STEVEPULLINS11@GMAIL.COM', NULL, 'Check out the automatic Bot, which works for you 24/7.', 'Everyone who needs money should try this Robot out. http://www.sociono.net/session-ida/?wptouch_switch=mobile&redirect=https%3A%2F%2Fvaratradgardsforening.se%2Fpromo', '2022-09-10 20:10:35', NULL),
(188, 'Crytowopsywopsy', 'taylor_ck@hotmail.com', NULL, 'The success formula is found. Learn more about it.', 'No need to work anymore while you have the Robot launched! http://metale24.pl/mainRedirect/?link=https%3A%2F%2Fvaratradgardsforening.se%2Fpromo', '2022-09-10 22:34:32', NULL),
(189, 'Crytowopsywopsy', 'lbulman@fellowes.com', NULL, 'Every your dollar can turn into $100 after you lunch this Robot.', 'The additional income for everyone. http://blog.majide.org/diary/out.php?id=asddf&url=https://varatradgardsforening.se%2Fpromo', '2022-09-11 00:56:13', NULL),
(190, 'Crytowopsywopsy', 'worr5150@yahoo.com', NULL, 'Online earnings are the easiest way for financial independence.', 'Make your computer to be you earning instrument. http://go.tygyguip.com/096s', '2022-09-11 03:18:27', NULL),
(191, 'Crytowopsywopsy', 'mina_atalla_89@hotmail.com', NULL, 'Financial robot is your success formula is found. Learn more about it.', 'The best way for everyone who rushes for financial independence. http://go.tygyguip.com/096s', '2022-09-11 05:41:45', NULL),
(192, 'Crytowopsywopsy', 'rpgh467@hotmail.com', NULL, 'Everyone can earn as much as he wants suing this Bot.', 'Invest $1 today to make $1000 tomorrow. http://go.tygyguip.com/096s', '2022-09-11 08:06:27', NULL),
(193, 'Crytowopsywopsy', 'andreaskoelzer@aol.com', NULL, 'Make your money work for you all day long.', 'See how Robot makes $1000 from $1 of investment. http://go.tygyguip.com/096s', '2022-09-11 10:27:53', NULL),
(194, 'Crytowopsywopsy', 'vanessaarreola46@yahoo.com', NULL, 'Attention! Financial robot may bring you millions!', 'Online earnings are the easiest way for financial independence. http://go.tygyguip.com/096s', '2022-09-11 12:51:02', NULL),
(195, 'Crytowopsywopsy', 'rogermclamb1128@hotmail.com', NULL, 'Need money? Earn it without leaving your home.', 'Make money, not war! Financial Robot is what you need. http://go.tygyguip.com/096s', '2022-09-11 15:11:05', NULL),
(196, 'Crytowopsywopsy', 'c.on.s.c.i.p.w.o.d@gmail.com', NULL, 'Online job can be really effective if you use this Robot.', 'We know how to become rich and do you? http://go.tygyguip.com/096s', '2022-09-11 17:32:56', NULL),
(197, 'Crytowopsywopsy', 'a_tyler06@yahoo.com', NULL, 'The best way for everyone who rushes for financial independence.', 'The financial Robot works for you even when you sleep. http://go.tygyguip.com/096s', '2022-09-11 19:55:59', NULL),
(198, 'Crytowopsywopsy', 'apunkrebel@yahoo.com', NULL, 'Financial robot is the best companion of rich people.', 'Earn additional money without efforts and skills. http://go.tygyguip.com/096s', '2022-09-11 22:40:28', NULL),
(199, 'Crytowopsywopsy', 'jka792@gmail.com', NULL, 'Make money in the internet using this Bot. It really works!', 'Turn $1 into $100 instantly. Use the financial Robot. http://go.tygyguip.com/096s', '2022-09-12 01:26:30', NULL),
(200, 'Crytowopsywopsy', 'will.janosek@yahoo.com', NULL, 'Wow! This Robot is a great start for an online career.', 'Provide your family with the money in age. Launch the Robot! http://go.tygyguip.com/096s', '2022-09-12 03:50:54', NULL),
(201, 'Crytowopsywopsy', 'janinerivard@gmail.com', NULL, 'Financial independence is what this robot guarantees.', 'Thousands of bucks are guaranteed if you use this robot. http://go.tygyguip.com/096s', '2022-09-12 06:18:38', NULL),
(202, 'Crytowopsywopsy', 'nelly.san4@gmail.com', NULL, 'Make dollars staying at home and launched this Bot.', 'Financial independence is what this robot guarantees. http://go.tygyguip.com/096s', '2022-09-12 08:46:05', NULL),
(203, 'Crytowopsywopsy', 'Noacl@yahoo.com', NULL, 'Even a child knows how to make money. This robot is what you need!', 'Making money can be extremely easy if you use this Robot. http://go.tygyguip.com/096s', '2022-09-12 11:12:40', NULL),
(204, 'Crytowopsywopsy', 'rhndcrrw@yahoo.com', NULL, 'Money, money! Make more money with financial robot!', 'Check out the newest way to make a fantastic profit. http://go.tygyguip.com/096s', '2022-09-12 13:35:15', NULL),
(205, 'Crytowopsywopsy', 'nhj.h.d.f.g.598.52.6.4.4@gmail.com', NULL, 'See how Robot makes $1000 from $1 of investment.', 'The financial Robot is your future wealth and independence. http://go.tygyguip.com/096s', '2022-09-12 16:02:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseaddordrops`
--

CREATE TABLE `courseaddordrops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_credit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered_course` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_course` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drop_course` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseaddordrops`
--

INSERT INTO `courseaddordrops` (`id`, `student_id`, `student_name`, `dept_name`, `campus`, `completed_credit`, `current_cgpa`, `current_sem`, `current_sem_year`, `student_mobile`, `student_email`, `registered_course`, `add_course`, `drop_course`, `created_at`, `updated_at`) VALUES
(1, '123', 'abir', 'BBA', 'City', '20', '3', 'Spring', '2011', '01712510054', 'rifattanvirislam61@gmail.com', 'bsss', 'ddddd', 'ddddd', '2022-06-08 12:22:33', '2022-06-08 12:22:33'),
(2, '65', 'S.M Sarowar', 'EEE', 'City', '4', '4', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'fasd', 'dfa', 'adf', '2022-07-02 05:53:10', '2022-07-02 05:53:10'),
(3, 'dS4ngWOYvJkz7', 'OKoId8dYnAHejc', 'EEE(eve)', 'Permanent', '4134490119', '4643273288', 'Fall', 'AEkdm8NaAmSa4eLvFhjY', 'tzrVVYKGXmVaDKQz5C6', 'x62iv1zhm9udm0x6@jobinspection.us', 'DeBIpYvPsLOyfwcYTV7ZlzL9BvEIC5trQXEkV', 'aNIlVJsfFCbLyzNZIajscE4cTc5JXGzwaSYoTHC2sJc3qmz4MVRKfqRHbv1Cprc0ia9IPZMSLLRM5zwaEuvGXcAYvAwLJz284xDYgx2nf7vVf9cxeA', 'k5ni3l3ZpfM5CUnmpD3bEerLGHK7hkXZkBZ6zW66ET7qelxjyQoU79mJ9IiSQMEIexPSCEDAoEdjsoy6YXUDSofOqsS6umeNdEoOw628A', '2022-09-02 17:48:54', '2022-09-02 17:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_brochure` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `grading_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_curriculum` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_schedules` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligibility` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` int(20) DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(2, NULL, 'English Spoken', NULL, '202209111250Bangla_department.jpg', 'apply online', '202209111250aud.png', NULL, NULL, NULL, NULL, NULL, 'HSC Diploma/Equivalent', 8000, NULL, 'Espoken', '2022-09-11 16:50:06', '2022-09-11 16:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `deans`
--

CREATE TABLE `deans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deans`
--

INSERT INTO `deans` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'professor', 'johurl Islam', 'johurl @gmail.com', 'kustia', '202205270907johurul.png', '2022-05-26 20:31:03', '2022-05-27 13:07:19'),
(2, 'Managerr', 'tnavir islam rifat', 'rifat@gmail.com', 'serpur', '202205261729shahjahan_ali.png', '2022-05-26 21:28:26', '2022-05-26 21:29:14'),
(4, 'professor original', 'ABRAR JIMI', 'ABRARJIMI@gmail.com', 'ABRAR JIMIABRAR JIMIABRAR JIMI', '202205270908shariful_islam.jpg', '2022-05-27 13:08:02', '2022-05-27 13:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `departmentchanges`
--

CREATE TABLE `departmentchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departmentchanges`
--

INSERT INTO `departmentchanges` (`id`, `student_id`, `student_name`, `campus`, `current_sem`, `current_sem_year`, `student_mobile`, `student_email`, `present_dept`, `to_be_dept`, `apply_reason`, `created_at`, `updated_at`) VALUES
(1, 'fasa', 'adf', 'City', 'Summer', '565', '01677997957', 'sarowara8@gmail.com', 'MBA(BBA Holder)', 'EEE', 'sdfs', '2022-07-02 05:55:26', '2022-07-02 05:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_brochure` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `grading_system` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_curriculum` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_schedules` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligibility` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` int(20) DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(21, 13, 'English', '<h2>&nbsp;</h2>\r\n\r\n<p><strong>BACHELOR OF ARTS WITH HONOURS IN ENGLISH</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ability to communicate clearly, think independently, reason logically and analyze critically.</p>\r\n\r\n<p><strong>Vision of the program</strong></p>\r\n\r\n<p>To develop the learner&#39;s ability to reach the level of literary expertise that nourishes humanitarian outlook of life.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission of the program</strong></p>\r\n\r\n<p>The program is designed to give the students a strong foundation of language and literature equipping them with professional skills to enhance the opportunity of employability. Alongside the study of texts in print, they will be introduced to the latest developments in digital media and new media storytelling. There is also a strong emphasis on honing the writing skills-creative writing, journalism, opening the door to an exciting range of career possibilities and further study.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OBJECTIVES</strong>:</p>\r\n\r\n<p>Under the program, the courses are designed to increase four categorical skills:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><strong>Language Training:</strong>&nbsp;To build up students&rsquo; listening, speaking, reading, and writing capabilities in English.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><strong>Literature</strong>: To empower students with knowledge of multi-cultural literature and broaden their vision internationally.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><strong>Linguistics</strong>: To introduce students to the structure, meaning and function of English language</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<ul>\r\n		<li><strong>Applied English</strong>: To improve spoken and written communication skills as a foundation for pursuing secondary professional skills, so as to meet the demands of career development research and diversity in the present social milieu.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Language Training courses</strong>include four years of English Lab and three years of English Composition. The English Lab courses begin with basic daily conversations, gradually move on to more complicated skills such as description, oral presentation, debate, and finally lead toward advanced skills such as academic communication and critical discussion of social issues. The English Composition courses start with grammar and sentence structure and then provide guided training on paragraph writing, leading toward organizational and rhetorical composition. The courses also incorporate test materials from GEPT or TOEFL and emphasize writing in different genres.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Literature courses&nbsp;</strong>&gt;include required survey courses such as Introduction to Western literature, English literature, American literature, and European literatures, and elective courses like drama, fiction, English poetry, and prose, Bible as literature, children&rsquo;s literature, comparative literature, and literary criticism. Through analysis, discussion, and criticism of literary works, the courses are designed to help students develop independent thinking, increase their understanding of Anglo-American literature and culture, nurture their cultural sensitivity in the humanities, and broaden their minds and vision. We hope to help students develop good understanding and problem-solving skills, capable of adapting to social changes in life and career.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Linguistics courses</strong>include phonetics, introduction to linguistics, pronunciation, sociolinguistics, psycholinguistics, and others. These courses aim at introducing a basic knowledge of English phonetics (e.g. the pronunciation, description, classification, variations, and phonological features of the English language), exploring the relationship between language and society (e.g. multilingual society, language and gender, language contact, and functions of language in different ethnic groups or societies), increasing students&rsquo; understanding of the basic issues in psycholinguistics (such as language acquisition, production, comprehension, language and the brain, and so forth), and discussing research methods and the fundamental spirit of linguistics.</p>\r\n\r\n<p><strong>The Applied English courses</strong>&nbsp;consist of foreign language acquisition theories, cultural studies and foreign language learning, English teaching methodology, macro strategies for English teaching, computer-assisted teaching, translation, practical English, business English, speech and debate, journalistic English, and Chinese-English interpretation. One part of the courses introduces students to the main issues in second-language acquisition and the importance of culture and society to language learning, helps them understand the principles, methods, and guidelines of English teaching, and explores the applications of computing technology in language teaching. The other part of the courses is designed to equip students with basic skills in practical writing, translation, business writing, communication, journalistic English, and Chinese-English interpretation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Learning Outcomes</strong></p>\r\n\r\n<p><strong>Cognitive</strong></p>\r\n\r\n<p>The students will be able to:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>discover English language and identify recurrent concepts;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>identify the structure and syntax of language;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>analyze themes and issues of different times;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>construct forms of Communicative English in corporate world;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>illustrate literary genres and periods;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>diagram the background of different literary works;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>compare the past and present writing techniques;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>clarify writing styles on different socio-economic conditions;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>gather knowledge of intercultural psychology;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>test own communication skills;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>relate literary and social context to the modes of expression;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>make use of information from primary and secondary sources for thesis.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Affective</strong></p>\r\n\r\n<p>The students will be able to:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>follow the guidelines of using English in different circumstances;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>question new concepts, models;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>react to different texts and prepare presentation on those;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>ask for clarification after reading any difficult text;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>answer questions when they are asked on a particular course;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>illustrate linguistics features;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>explain benefits of reading Western literature;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>accept western view of thinking from their cultural stand;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>display self-reliance when writing independently;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>practice in class discussion and think critically;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>apply learning outcome format confidently.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Psychomotor</strong></p>\r\n\r\n<p>The students will be able to:</p>\r\n\r\n<ol>\r\n	<li>choose foreign culture applicable in their own cultural context;</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>recognize critical ideas of different writers from different times;</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>respond comfortably to conversation in English;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>follow the communicative skills and adopt those in daily life;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>perform presentation profoundly;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>demonstrate a seminar/class in English;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>solve English grammatical and literary problems;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>build up a strong open mind to accept.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Generic Skills/Graduate Profile:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Critical thinking;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Creative writing;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Professional Writing;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Communication through English (all four skills);</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>News presentation in English;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Strategic Reasoning;</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Teaching skills.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Teaching Strategy</strong></p>\r\n\r\n<p><em>Medium of Instruction</em></p>\r\n\r\n<p>The medium of instruction and answer in the examinations shall be English. But Bengali courses shall be taught in Bengali.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Duration of the Program</em></p>\r\n\r\n<p>The duration of this program shall be 8(eight) semesters in 4(four) academic years. There shall be 2(two) semester in each academic year. Each semester will be of 6(six) months consisting of 18(eighteen) weeks of which 13(thirteen) weeks for class teaching, at least 1(one) week as break and 4(four) weeks for holding the semester final examination. For each course there will be 1(one) lecture of 60 minutes for each credit in every week and minimum 6(six) hour for tutorial/open academic discussions in every semester. In case of practical course 2(two) class hour in a week shall be considered as one credit. Students shall sit for the oral examination (Viva-Voce) at the end of 2nd&nbsp;semester final examination in each academic year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Course, Marks and Credit Hours</strong></em></p>\r\n\r\n<p>The BA (Honors) in English program shall consist of 123 credits. The number of courses including marks and credits of each course will be determined by the academic committee of the concerned department and approved by the university and UGC authority. Among all the courses minimum 4(four) courses should be allied.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>GRADING SYSTEM</h3>\r\n\r\n<p><strong>Assessment Strategy</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Course Evaluation:&nbsp;</em>Performance of students in a theoretical course shall be evaluated as follows:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"left\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:481px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Serial</p>\r\n			</td>\r\n			<td>\r\n			<p>Item</p>\r\n			</td>\r\n			<td>\r\n			<p>Marks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;01</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Mid-term test</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;02</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Class performance/ participation /class study/ Quiz/&nbsp; &nbsp; &nbsp; &nbsp;Assignment/ class test without notice</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;03</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Class Attendance</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; 04</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Internal Evaluation Total</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>40</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;05</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Year-end final Examination</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The marks for class attendance shall be as follows:</p>\r\n\r\n<p><strong>Attendance Marks</strong></p>\r\n\r\n<p>90% and above. 10</p>\r\n\r\n<p>80% to 89% 8</p>\r\n\r\n<p>70% to 79% 6</p>\r\n\r\n<p>60% to 69% 4</p>\r\n\r\n<p>50% to 59% 2</p>\r\n\r\n<p>Less than 50% 0</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>[<strong>N.B.</strong>&nbsp;Students will not be allowed to sit for the examination of a course if his/her class attendance in that course is less than 50%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Grading System:&nbsp;</em>Total marks obtained in each course and viva-voce examinations shall be converted into LG (Letter Grade) and GP (Grade point) as under:</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:504px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>&nbsp; &nbsp;Numerical Grade</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Letter Grade</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Grade point</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Interpretation</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;80% and above</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A+</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A plus</p>\r\n			</td>\r\n			<td>\r\n			<p>4.00</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Outstanding</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;75% to less than 80%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A regular</p>\r\n			</td>\r\n			<td>\r\n			<p>3.75</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp; &nbsp;Excellent</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;70% to less than 75%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A-</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;A minus</p>\r\n			</td>\r\n			<td>\r\n			<p>3.50</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Very Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;65% to less than 70%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B+</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B plus</p>\r\n			</td>\r\n			<td>\r\n			<p>3.25</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;60% to less than 65%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B regular</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;55% to less than 60%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B-</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;B minus</p>\r\n			</td>\r\n			<td>\r\n			<p>2.75</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Below Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;50% to less than 55%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;C+</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;C plus</p>\r\n			</td>\r\n			<td>\r\n			<p>2.50</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;45% to less than 50%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;C</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;C regular</p>\r\n			</td>\r\n			<td>\r\n			<p>2.25</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Below Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp; &nbsp;40% to less than 45%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;D</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td>\r\n			<p>2.00</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Poor</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a name=\"_GoBack\"></a>&nbsp; &nbsp;Less than 40%</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;F</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td>\r\n			<p>0</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp; &nbsp;Fail</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://rajtrims.com/images/course-img.jpg\" /></p>', '202209050801Department_english.png', 'apply online', '202209050801book-bg.png', NULL, NULL, NULL, NULL, NULL, 'HSC Diploma/Equivalent', 50000, NULL, 'Eng', '2022-09-05 12:01:32', '2022-09-05 12:03:26'),
(22, 13, 'Bangla', '<h2>COURSE DESCRIPTION</h2>\r\n\r\n<p>About Us</p>\r\n\r\n<p>Rabindra Maitree University was established in 2015 and started its academic journey in September 2017 with a view to keeping the memories of the Great Poet Rabindranath Tagore. One of the objectives of this university has been set to run the university with Tagore&rsquo;s philosophy of education. The contribution of Rabindranath in creation and development of Bengali literature is undeniable. Without studying Bengali literature as well as Rabindra literature, Tagore&rsquo;s philosophy of education will be incomplete. So the university authority proposed Bengali department as one of the core disciplines that is unique in the history of private universities in Bangladesh. Presently the Department of Bengali offers undergraduate program in Bengali which give students an opportunity to know and appreciate the science of language as well as the literary works of Bengali and to develop literary and linguistic aptitudes of their own. At present the department is conducting its academic activities with four brilliant faculties under the leadership of Professor Dr. Md. Shahidur Rahman, former Head of the Department of Bengali of Islamic University and former Head of the Department of Folklore of the University of Rajshahi.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '202209070614Bangla_department.jpg', 'apply online', '202209070614404-img.png', 4, NULL, NULL, NULL, NULL, 'HSC Diploma/Equivalent', 1200000, NULL, 'Ban', '2022-09-07 10:14:53', '2022-09-07 10:14:53');
INSERT INTO `departments` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(23, 14, 'INFORMATION AND COMMUNICATION TECHNOLOGY', '<h2>COURSE DESCRIPTION</h2>\r\n\r\n<p><strong>About Us</strong></p>\r\n\r\n<p>The Department of Information and Communication Technology (ICT) at the Rabindra Maitree University started its academic activities from July-December 2017 semester and currently it offers BSc Engineering program. Through the program, the department provides high quality education, planning, designing and deploying in both the theoretical and practical ways about information technology. Department aims to promote education, innovative research and create competent and skilled professionals in Information and Communication Technology.</p>\r\n\r\n<p><strong>Vision of the Department</strong></p>\r\n\r\n<p>To become excellent and house of quality standard education and innovative research on information and communication Technology.</p>\r\n\r\n<p><strong>Mission of the Department</strong></p>\r\n\r\n<p>To provide high quality education, planning, design and deploying in both the theoretical and practical about information technology aiming to promote education, innovative research and create competent and skilled professionals in information technology who shall contribute towards the advancement of engineering, science and technology as well as the nation on a whole.</p>\r\n\r\n<h2>MESSAGE FORM THE HEAD</h2>\r\n\r\n<p>From the inception of the department it has been widely recognized for its excellent research and teaching capabilities. We are trying to promote the department of Information &amp; Communication Technology and be recognized as a national and international center of excellence for teaching and research. We are ensuring professional education in core areas of network and software engineering and concentrate on the development of analysis, network design, network security, programming skills, communication theory, digital signal processing, computer vision and wireless communications and on the societal and business context of network and software systems depend on the modern technology. One of the predominant targets of this department is to be recognized as the reputed ICE department in our country. Our prominent faculties play a prime role in attaining this aim. They are committed educators who provide steering and act as a task model for our student. ICE faculties are involved in very interesting and numerous areas of studies that include digital signal processing, digital image processing, computer vision, deep learning, semiconductor electronics, communication engineering, instrumentation and manage, microwave engineering and so on. For this reason, we&#39;ve developed research based education and laboratory associated with this issue. We are very much pleased to let the concerned know that the departmental education system is totally curriculum based. The Curriculum of the ICT department covers a large variety of disciplines related to subject contents, learning outcomes and teaching strategies. We invite all learners and curious people to our house to enrich themselves in this dynamic scientific field of ICT. ICT is the most emerging and demanding field worldwide due to the gradual increase of modern technology.<br />\r\n<br />\r\nProfessor Dr. Md. Jamshed Ali Sarkar<br />\r\nHead, Department of ICT<br />\r\nRabindra Maitree University</p>\r\n\r\n<p><strong>Objectives of the Program</strong></p>\r\n\r\n<p><strong>Programs</strong></p>\r\n\r\n<p><strong>Undergraduate</strong></p>\r\n\r\n<p><strong>4 (Four) Year BSc Engineering in Information and Technology</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vision of the Program</strong></p>\r\n\r\n<p>To develop and build a global leader in provide innovative plan, education and research in the era of information and communication Technology.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission of the Program</strong></p>\r\n\r\n<p>To provide excellent education in a state of the art environment, preparing students for careers as information and communication Technology in industry, government and academia thus amplifying their potential for lifelong high-quality careers and give them a competitive advantage in the ever changing and challenging global work environment of the 21st&nbsp;century.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Objectives of the Program</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>To provide adequate and understanding knowledge on&nbsp;information technology, scope&nbsp;and&nbsp;role of&nbsp;ict&nbsp;in the technology.</li>\r\n		<li>To provide breadth&nbsp;of knowledge in information and communication engineering, as exemplified in the areas of systems, theory and software development.</li>\r\n		<li>To create and analyze complex&nbsp;problem and the synthesis of solutions to these problems.</li>\r\n		<li>To develop practical method of teaching, learning and&nbsp;refining curriculum to keep the program current with the rapidly changing technology.</li>\r\n		<li>To prepare professionally qualified and skillful engineers on the basis of market demand.</li>\r\n		<li>To collaborate works, help students to develop the ability to communicate effectively and consider the perspective of others, especially those who may not</li>\r\n		<li>ave technical&nbsp;background.</li>\r\n		<li>To integrate multi-disciplinary approaches to learn information and communication Technology, i.e.,</li>\r\n		<li>To enable the graduates to develop them inter personal&nbsp;skills.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LEARNING OUTCOMES</p>\r\n\r\n<p><strong>Learning Outcomes</strong></p>\r\n\r\n<p><em><strong>Cognitive</strong></em></p>\r\n\r\n<p>Students will be able to</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Define information and communication engineering and existing technology.</li>\r\n		<li>Explain and Restate ICT and role of Ice in the world.</li>\r\n		<li>Use existing technology in given&nbsp;problem.</li>\r\n		<li>Apply fundamental principles and method to solve a critical problem.</li>\r\n		<li>Apply mathematical and scientific reasoning to various types of computer&nbsp;problem.</li>\r\n		<li>Distinguish new technology from technology.</li>\r\n		<li>Put method on specific&nbsp;problem.</li>\r\n		<li>Formulate new technology and method to solve specific&nbsp;problem.</li>\r\n		<li>Compare role&nbsp;of ice and technology</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>AFFECTIVE</p>\r\n\r\n<p>Affective Students will be able to<br />\r\n(i) Act according to the professional, ethical, legal, security and social issues and responsibilities.<br />\r\n(ii) Use current techniques, skills and tools for computing practice.<br />\r\n(iii) Analyze the global and local impact of computing on individuals, organizations and society.<br />\r\n(iv) Communicate effectively with a range of audience.<br />\r\n(v) Show interest to design, implement, and evaluate a computer-based system, process, component, program to meet desired need.<br />\r\n(vi) Function effectively on teams to accomplish a common goal.<br />\r\n(vii) Analyze a problem and identify the computing requirements appropriate to its solution.<br />\r\n(viii) Help to develop mathematical foundations, algorithmic principals and computer science theory.<br />\r\n(ix) Share knowledge with others<br />\r\n(x) Act as important factor in the construction of software system of varying complexity.<br />\r\n(xi) Shows awareness of self-management and team management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PSYCHOMOTOR</p>\r\n\r\n<p>Students will be able to<br />\r\n<br />\r\n(i) Demonstrate role of ice with the technology<br />\r\n(ii) Uses alternative solutions to computing problems.<br />\r\n(iii) Skillful in using method to lead the world and society.<br />\r\n(iv) Competent enough to use interpersonal skills.<br />\r\n(v) competent enough to work in a community.<br />\r\n(vi) Follows existing technology and utilize it in a proper way.<br />\r\n(vii) Competent enough to develop an algorithm<br />\r\n(viii) Procedure to create a new software in a convenient way</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GENERIC SKILLS</p>\r\n\r\n<p>Problem solving<br />\r\nInnovative plan to success research<br />\r\nProject design, testing and analysis<br />\r\nIT enabled research<br />\r\nState and Develop algorithm and solve it by programming language or Mathematics rule<br />\r\nCommunication skills<br />\r\nAutomation and Robotics<br />\r\nCreate and manage database</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Teaching Strategy</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Medium of Instruction</em></p>\r\n\r\n<p>The medium of instruction and answer in the examinations shall be English. But Bengali course shall be taught in Bengali.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Duration of the Program</em></p>\r\n\r\n<p><a name=\"OLE_LINK4\"></a>The duration of this program shall be 8(eight) semesters in 4(four) academic years. There shall be 2(two) semester in each academic year. Each semester will be of 6(six) months consisting of 18(eighteen) weeks of which 13(thirteen) weeks for class teaching, at least 1(one) week as break and 4(four) weeks for holding the semester final examination. For each course there will be 1(one) lecture of 60 minutes for each credit in every week and minimum 6(six) hour for tutorial/open academic discussions in every semester. In case of practical course 2(two) class hour in a week shall be considered as one credit. Students shall sit for the oral examination (Viva-Voce) at the end of 2nd&nbsp;semester final examination in each academic year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>COURSE, MARKS AND CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The ICE (B.Sc. Engg.) program shall consist of 170 credits. The number of courses including marks and credits of each course will be determined by the academic committee of the concerned department and approved by the university and UGC authority. Among the all courses, minimum 10 (ten) courses should be allied.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ASSESSMENT STRATEGY</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Course Evaluation</em></p>\r\n\r\n<p>Performance of students in a theoretical course shall be evaluated as follows:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Serial</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Item</p>\r\n			</td>\r\n			<td>\r\n			<p>Marks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>01</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Midterm Test</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>02</p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p>Internal Evaluation</p>\r\n			</td>\r\n			<td>\r\n			<p>Class performance/ participation /class study/ Quiz/ Assignment/ class test without notice</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>03</p>\r\n			</td>\r\n			<td>\r\n			<p>Class Attendance</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Internal Evaluation Total</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>04</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Year-end final Examination</p>\r\n			</td>\r\n			<td>\r\n			<p><a name=\"_Hlk511118709\"></a>60</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Performance of students in a practical course will be evaluated as follows:</p>\r\n\r\n<table align=\"left\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Serial</p>\r\n			</td>\r\n			<td>\r\n			<p>Item</p>\r\n			</td>\r\n			<td>\r\n			<p>Marks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>01</p>\r\n			</td>\r\n			<td>\r\n			<p>Continuous Assessment (Quiz 5, class test 5, assignment 5)</p>\r\n			</td>\r\n			<td>\r\n			<p>40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>02</p>\r\n			</td>\r\n			<td>\r\n			<p>lab report and term paper 15, lab attendance 10) Project (work 10, report 5, presentation 5)</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>03</p>\r\n			</td>\r\n			<td>\r\n			<p>Lab Examination (script 15, experiment 15, viva 10)</p>\r\n			</td>\r\n			<td>\r\n			<p>40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The marks for class attendance shall be as follows:</p>\r\n\r\n<p><strong>Attendance Marks.</strong></p>\r\n\r\n<p>90% and above. 10</p>\r\n\r\n<p>80% to 89% 8</p>\r\n\r\n<p>70% to 79% 6</p>\r\n\r\n<p>60% to 69% 4</p>\r\n\r\n<p>50% to 59% 2</p>\r\n\r\n<p>Less than 50% 0</p>\r\n\r\n<p>[<strong>N.B.</strong>&nbsp;A student will not be allowed to sit for the examination of a course if his/her class attendance in that course is less than 50%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GRADING SYSTEM</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Total marks obtained in each course and viva-voce examinations shall be converted into LG (Letter Grade) and GP (Grade point) as under:</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Numerical Grade</p>\r\n			</td>\r\n			<td colspan=\"3\">\r\n			<p>Letter Grade</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Grade point</p>\r\n			</td>\r\n			<td>\r\n			<p>Interpretation</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>80% and above</p>\r\n			</td>\r\n			<td>\r\n			<p>A+</p>\r\n			</td>\r\n			<td>\r\n			<p>A plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>4.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Outstanding</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>75% to less than 80%</p>\r\n			</td>\r\n			<td>\r\n			<p>A</p>\r\n			</td>\r\n			<td>\r\n			<p>A regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.75</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Excellent</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>70% to less than 75%</p>\r\n			</td>\r\n			<td>\r\n			<p>A-</p>\r\n			</td>\r\n			<td>\r\n			<p>A minus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.50</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Very Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>65% to less than 70%</p>\r\n			</td>\r\n			<td>\r\n			<p>B+</p>\r\n			</td>\r\n			<td>\r\n			<p>B plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.25</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>60% to less than 65%</p>\r\n			</td>\r\n			<td>\r\n			<p>B</p>\r\n			</td>\r\n			<td>\r\n			<p>B regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>55% to less than 60%</p>\r\n			</td>\r\n			<td>\r\n			<p>B-</p>\r\n			</td>\r\n			<td>\r\n			<p>B minus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.75</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Below Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>50% to less than 55%</p>\r\n			</td>\r\n			<td>\r\n			<p>C+</p>\r\n			</td>\r\n			<td>\r\n			<p>C plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.50</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>45% to less than 50%</p>\r\n			</td>\r\n			<td>\r\n			<p>C</p>\r\n			</td>\r\n			<td>\r\n			<p>C regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.25</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Below Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>40% to less than 45%</p>\r\n			</td>\r\n			<td>\r\n			<p>D</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Poor</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Less than 40%</p>\r\n			</td>\r\n			<td>\r\n			<p>F</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>0</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Fail</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Year/Semester</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Sessional</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Total</strong></p>\r\n\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>21.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>20.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Grand Total</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>47</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>140</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>30.75</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>170</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Year/Semester</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Sessional</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Total</strong></p>\r\n\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>21.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>20.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Grand Total</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>47</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>140</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>30.75</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>170</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"7\">\r\n			<p><strong>COURSES FOR 1</strong><strong>st</strong><strong>&nbsp;YEAR 1</strong><strong>st</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td colspan=\"2\" rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"3\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1101</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Circuit Theory and Analysis</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1102</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Circuit Theory and Analysis Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1103</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Basic Electronics</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1104</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Basic Electronics Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1105</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Information Technology and Computer Fundamental</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE 1106</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Information Technology and Computer Fundamental Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>MATH 1101</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Differential Calculus and Geometry</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>GED 1101</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>History of Emergence of Bangladesh</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p>ENG 1101</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>English-I: Basic Communicative Skills</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>27.00</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:99%\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"vertical-align:top\">\r\n			<p><strong>COURSES FOR 1st YEAR 2nd SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Analog Electronics</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Analog Electronics Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1203</p>\r\n			</td>\r\n			<td>\r\n			<p>Programming with C</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1204</p>\r\n			</td>\r\n			<td>\r\n			<p>Programming with C Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1205</p>\r\n			</td>\r\n			<td>\r\n			<p>Applied Electricity and Magnetism</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>ICE-1206</p>\r\n			</td>\r\n			<td>\r\n			<p>Applied Electricity and Magnetism Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>MATH-1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Integral Calculus and Differential Equations</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>BUS-1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Financial Accounts and Economic Analysis</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p><strong>COURSES FOR 2</strong><strong>nd</strong><strong>&nbsp;YEAR 1</strong><strong>st</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2101</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Advanced Electronics</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2102</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Electronics</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2103</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Electronics Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2104</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Web Programming</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2105</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Web Programming Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE 2106</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Discrete Mathematics and Numerical Methods</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>BNG 2102</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Bengali Language</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>MATH 2101</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Vector, Matrix and Linear Algebra</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>STAT 2101</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Statistics for Communication Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>27.00</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:99%\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p><strong>COURSES FOR 2</strong><strong>nd</strong><strong>&nbsp;YEAR 2</strong><strong>nd</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-2201</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Data Structure and Algorithm</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-2202</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Data Structure and Algorithm Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-2203</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Communication Theory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-2204</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Communication Theory Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-2205</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Electromagnetic Fields and Waves</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>MATH-2201</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Complex Variable Analysis, Laplace and Fourier Transforms</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>STAT-2201</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Random Variables and Stochastic Processes</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Optional:</strong></p>\r\n\r\n			<p><strong>GED-2202/</strong></p>\r\n\r\n			<p><strong>GED-2203</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>History of World Civilization / Socio Economic and Political Studies of Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:99%\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"7\">\r\n			<p><strong>COURSES FOR 3</strong><strong>rd</strong><strong>&nbsp;YEAR 1</strong><strong>st</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"4\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3101</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Artificial Intelligence and Neural Computing</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3102</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Artificial Intelligence and Neural Computing Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3103</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Radio and TV Engineering</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3104</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Radio and TV Engineering Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3105</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Network Programming with Java</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3106</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Network Programming with Java Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3107</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Architecture and Parallel Processing</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3108</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Architecture and Parallel Processing Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3109</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Signal and Systems</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"4\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>25.50</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p><strong>COURSES FOR 3</strong><strong>rd</strong><strong>&nbsp;YEAR 2</strong><strong>nd</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3201</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Signal Processing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3202</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Signal Processing Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3203</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Telecommunication Systems, Networks and Switching</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3204</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Telecommunication Systems, Networks and Switching Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3205</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3206</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Communication Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3207</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Antennas and Radio Wave Propagation</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3208</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Antennas and Radio Wave Propagation Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-3209</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Information Theory and Coding</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>25.50</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:646px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p><strong>COURSES FOR 4</strong><strong>th</strong><strong>&nbsp;YEAR 1</strong><strong>st</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4101</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Satellite Communication and Radar</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4102</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Network and Data Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4103</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Network and Data Communication Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4104</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Wireless and Mobile Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4105</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Wireless and Mobile Communication Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4106</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Cryptography and Network Security</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4107</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Multimedia Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4108</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Multimedia Communication Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4109</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Project Planning &amp; Management</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:675px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"7\">\r\n			<p><strong>COURSES FOR 4</strong><strong>th</strong><strong>&nbsp;YEAR 2</strong><strong>nd</strong><strong>&nbsp;SEMESTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Course</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td colspan=\"2\" rowspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"3\">\r\n			<p><strong>Theory/ Sessional</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Contact</strong></p>\r\n\r\n			<p><strong>Hrs/week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4201</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Project</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4202</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>System Analysis and Software Engineering</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4203</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>System Analysis and Software Engineering Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4204</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Neural and Fuzzy Systems in Communications</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4205</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Engineering Ethics</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.00</p>\r\n			</td>\r\n			<td>\r\n			<p>2.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4206</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>DBMS, Data Warehousing and Data Mining</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Optional - I</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE -4215</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Optional &ndash; I Laboratory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p>.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Optional - II</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Total&nbsp;</strong><strong></strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>23.00</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>List of Optional Courses</strong></p>\r\n\r\n<p><strong>Optional-I</strong></p>\r\n\r\n<p>Optional-I should be selected from the following courses:</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Sl.</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Contact<br />\r\n			Hrs./week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4207</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Microwave and Fiber Optic Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4208</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Microwave and Fiber Optic Communication Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4209</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Vision</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4210</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Vision Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4211</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Natural Language Processing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4212</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Natural Language Processing Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4213</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Design of VLSI Circuits and Systems</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4214</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Design of VLSI Circuits and Systems Laboratory</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n			<td>\r\n			<p>0.75</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Optional-II</strong></p>\r\n\r\n<p>Optional-II should be selected from the following courses:&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Sl.</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Contact<br />\r\n			Hrs./week</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4216</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Cloud Computing</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4217</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Biomedical Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4218</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Mobile Computing</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<ol>\r\n				<li>\r\n				<ol>\r\n					<li>&nbsp;</li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>ICE-4219</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Advanced Robotics</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '202209070622ICT_department.jpg', 'apply online', '202209070622ICT_department.jpg', NULL, NULL, NULL, NULL, NULL, '4', 320000, NULL, 'ict', '2022-09-07 10:22:12', '2022-09-07 10:22:12');
INSERT INTO `departments` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(24, 14, 'Computer Science and Engineering (CSE)', '<p><strong>About Us</strong></p>\r\n\r\n<p>The Department of Computer Science and Engineering (CSE) at Rabindra Maitree University (RMU) is a place where most decorated thoughts are assembled for a higher purpose. The Department of CSE currently offers BSc Engineering in Computer Science. The analysis of computer-programming itself researches various aspects of the use of programming languages and complex systems, and human-computer interaction focuses on the challenges to create computers and computations useful, usable, and globally available to mankind. We think that all members of the community are catalysts of development and encourage them to escape from traditional learning and apply attitude to generate new knowledge and others to perform the same. Through the program the department ensures highly competitive environment, world-class facilities with hard working faculties that helps the students to be an enthusiastic leader the field computer related technology.</p>\r\n\r\n<p><strong>Vision of the Department</strong></p>\r\n\r\n<p>To become center of excellence in the field of Computer Science and Engineering for providing technically competent professionals for the needs of industry and research aimed towards betterment of the society..</p>\r\n\r\n<p><strong>Mission of the Department</strong></p>\r\n\r\n<p>Provide a learning ambience to enhance innovations, problem solving skills, leadership qualities, team-spirit and ethical responsibilities. Provide exposure of latest tools and technologies in the area of engineering and technology. Establish Industrial interaction program to enhance the entrepreneurship skills. Create, share and apply their knowledge in multidisciplinary areas to earn benefit for the humanity. Promote research based projects/activities in the emerging areas of technology convergence.</p>\r\n\r\n<h2>MESSAGE FORM THE HEAD</h2>\r\n\r\n<p>From the inception of the department it has been widely recognized for its excellent research and teaching capabilities. We are trying to promote the department of Information &amp; Communication Technology and be recognized as a national and international center of excellence for teaching and research. We are ensuring professional education in core areas of network and software engineering and concentrate on the development of analysis, network design, network security, programming skills, communication theory, digital signal processing, computer vision and wireless communications and on the societal and business context of network and software systems depend on the modern technology. One of the predominant targets of this department is to be recognized as the reputed ICE department in our country. Our prominent faculties play a prime role in attaining this aim. They are committed educators who provide steering and act as a task model for our student. ICE faculties are involved in very interesting and numerous areas of studies that include digital signal processing, digital image processing, computer vision, deep learning, semiconductor electronics, communication engineering, instrumentation and manage, microwave engineering and so on. For this reason, we&#39;ve developed research based education and laboratory associated with this issue. We are very much pleased to let the concerned know that the departmental education system is totally curriculum based. The Curriculum of the ICT department covers a large variety of disciplines related to subject contents, learning outcomes and teaching strategies. We invite all learners and curious people to our house to enrich themselves in this dynamic scientific field of ICT. ICT is the most emerging and demanding field worldwide due to the gradual increase of modern technology.<br />\r\n<br />\r\nProfessor Dr. Md. Jamshed Ali Sarkar<br />\r\nHead, Department of ICT<br />\r\nRabindra Maitree University</p>\r\n\r\n<p><strong>Objectives of the Program</strong></p>\r\n\r\n<p><strong>Programs</strong></p>\r\n\r\n<p><strong>Undergraduate</strong></p>\r\n\r\n<p><strong>4 (Four) Year BSc Engineering in Information and Technology</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Vision of the Program</strong></p>\r\n\r\n<p>To develop and build a global leader in provide innovative plan, education and research in the era of information and communication Technology.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mission of the Program</strong></p>\r\n\r\n<p>To provide excellent education in a state of the art environment, preparing students for careers as information and communication Technology in industry, government and academia thus amplifying their potential for lifelong high-quality careers and give them a competitive advantage in the ever changing and challenging global work environment of the 21st&nbsp;century.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Objectives of the Program</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n\r\n	<p>LEARNING OUTCOMES</p>\r\n\r\n	<ol>\r\n		<li>To provide adequate and fundamental knowledge and concept&nbsp;of computer science and other related sciences.</li>\r\n		<li>To create and analyze complex&nbsp;problem and the synthesis of solutions to these problems.</li>\r\n		<li>To develop practical method of teaching, learning and&nbsp;refining curriculum to keep the program current with the rapidly changing modern technology.</li>\r\n		<li>To prepare professionally qualified and skillful engineers on the basis of market demand.</li>\r\n		<li>To prepare students to&nbsp;the job market competition by strengthening their communication skills and promoting&nbsp;team work.</li>\r\n		<li>To foster students&rsquo; intellectual skills.</li>\r\n		<li>To enable the graduates to develop them inter personal&nbsp;and leadership skills.</li>\r\n		<li>To demonstrate incremental professional competencies in computer science and related fields.</li>\r\n		<li>To enhance skills and knowledge through life-long learning and pursuit of higher studies.</li>\r\n		<li><strong>Cognitive</strong>\r\n		<p>&nbsp;</p>\r\n\r\n		<p>Students will be able to</p>\r\n\r\n		<ol>\r\n			<li>\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Apply fundamental principles and method to solve a critical problem.</li>\r\n				<li>Formulate new technology and method to solve specific&nbsp;problem.</li>\r\n				<li>Apply knowledge of computing and mathematics appropriate to the discipline.</li>\r\n				<li>Analyze a problem, and identify and define the computing requirements appropriate to its solution</li>\r\n				<li>Design, implement,&nbsp;and evaluate a computer-based system, process, component, or program to meet desired needs</li>\r\n				<li>Analyze the local and global impact of computing on individuals, organizations, and society</li>\r\n				<li>Apply mathematical foundations, algorithmic principles, and computer science theory in the modeling and design of computer-based systems in a way that demonstrates comprehension of the tradeoffs involved in design choices.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>AFFECTIVE</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Students will be able to Acknowledge the need for and an ability to engage in continuing professional development.<br />\r\nShow interest to design, implement, and evaluate a computer-based system, process, component, program to meet desired need.<br />\r\nAct effectively on teams to accomplish a common goal<br />\r\nShare knowledge with others.<br />\r\nHelp the general people by giving computer related technical service.<br />\r\nRespect social and ethical values in profession.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PSYCHOMOTOR</p>\r\n\r\n<p>Students will be able to</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n\r\n	<p>GENERIC SKILLS</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<ol>\r\n		<li>Apply design and development principles in the construction of software systems of varying complexity.</li>\r\n		<li>Carry out computer related business according to the given skills.</li>\r\n		<li>Use other associated skills in their professional and social life.</li>\r\n		<li>Competent enough to use interpersonal skills.</li>\r\n		<li>Competent to work in a team.</li>\r\n		<li>Follow professional, ethical, legal, security and social issues and responsibilities.</li>\r\n		<li>Use current techniques, skills, and tools necessary for computing practice.\r\n		<ol>\r\n			<li>Communication Skills</li>\r\n			<li>Critical thinking and problem solving</li>\r\n			<li>Project management/planning</li>\r\n			<li>Team working</li>\r\n			<li>Enterprise and business planning</li>\r\n			<li>Team working</li>\r\n			<li>Entrepreneurship skills</li>\r\n			<li>Career Development</li>\r\n			<li>Leadership skill</li>\r\n			<li>Ethical and moral</li>\r\n		</ol>\r\n		</li>\r\n		<li>eaching Strategy\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><em>Medium of Instruction</em></p>\r\n\r\n		<p>The medium of instruction and answer in the examinations shall be English. But Bengali course shall be taught in Bengali.</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><em>Duration of the Program</em></p>\r\n\r\n		<p><a name=\"OLE_LINK4\"></a>The duration of this program shall be 8(eight) semesters in 4(four) academic years. There shall be 2(two) semester in each academic year. Each semester will be of 6(six) months consisting of 18(eighteen) weeks of which 13(thirteen) weeks for class teaching, at least 1(one) week as break and 4(four) weeks for holding the semester final examination. For each course there will be 1(one) lecture of 60 minutes for each credit in every week and minimum 6(six) hour for tutorial/open academic discussions in every semester. In case of practical course 2(two) class hour in a week shall be considered as one credit. Students shall sit for the oral examination (Viva-Voce) at the end of 2nd&nbsp;semester final examination in each academic year.</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><em>Course, Marks and Credit Hours</em></p>\r\n\r\n		<p>The B.Sc. Engineering in Computer Science program shall consist of 165 credits.&nbsp;The number of courses including marks and credits of each course may be changed by the academic committee of the concerned department and approved by the university and UGC authority.</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><strong>Assessment Strategy</strong></p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p><em>Course Evaluation</em></p>\r\n\r\n		<p>Performance of students in a theoretical course shall be evaluated as follows:</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<table align=\"left\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n			<tbody>\r\n				<tr>\r\n					<td>\r\n					<p>Serial</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Item</p>\r\n					</td>\r\n					<td>\r\n					<p>Marks</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>01</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Midterm Test</p>\r\n					</td>\r\n					<td>\r\n					<p>20</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>02</p>\r\n					</td>\r\n					<td rowspan=\"2\">\r\n					<p>Internal Evaluation</p>\r\n					</td>\r\n					<td>\r\n					<p>Class performance/ participation /class study/ Quiz/ Assignment/ class test without notice</p>\r\n					</td>\r\n					<td>\r\n					<p>10</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>03</p>\r\n					</td>\r\n					<td>\r\n					<p>Class Attendance</p>\r\n					</td>\r\n					<td>\r\n					<p>10</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>&nbsp;</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Internal Evaluation Total</p>\r\n					</td>\r\n					<td>\r\n					<p>20</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>04</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Year-end final Examination</p>\r\n					</td>\r\n					<td>\r\n					<p><a name=\"_Hlk5111187091\"></a>60</p>\r\n					</td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>Performance of students in a practical course will be evaluated as follows:</p>\r\n\r\n		<table align=\"left\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n			<tbody>\r\n				<tr>\r\n					<td>\r\n					<p>Serial</p>\r\n					</td>\r\n					<td>\r\n					<p>Item</p>\r\n					</td>\r\n					<td>\r\n					<p>Marks</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>01</p>\r\n					</td>\r\n					<td>\r\n					<p>Continuous Assessment (Quiz 5, class test 5, assignment 5)</p>\r\n					</td>\r\n					<td>\r\n					<p>40</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>02</p>\r\n					</td>\r\n					<td>\r\n					<p>lab report and term paper 15, lab attendance 10) Project (work 10, report 5, presentation 5)</p>\r\n					</td>\r\n					<td>\r\n					<p>20</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>03</p>\r\n					</td>\r\n					<td>\r\n					<p>Lab Examination (script 15, experiment 15, viva 10)</p>\r\n					</td>\r\n					<td>\r\n					<p>40</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>&nbsp;</p>\r\n					</td>\r\n					<td>\r\n					<p>Total</p>\r\n					</td>\r\n					<td>\r\n					<p>100</p>\r\n					</td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>The marks for class attendance shall be as follows:</p>\r\n\r\n		<p><strong>Attendance Marks.</strong></p>\r\n\r\n		<p>90% and above. 10</p>\r\n\r\n		<p>80% to 89% 8</p>\r\n\r\n		<p>70% to 79% 6</p>\r\n\r\n		<p>60% to 69% 4</p>\r\n\r\n		<p>50% to 59% 2</p>\r\n\r\n		<p>Less than 50% 0</p>\r\n\r\n		<p>[<strong>N.B.</strong>&nbsp;A student will not be allowed to sit for the examination of a course if his/her class attendance in that course is less than 50%.</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>GRADING SYSTEM</p>\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<p>Total marks obtained in each course and viva-voce examinations shall be converted into LG (Letter Grade) and GP (Grade point) as under:</p>\r\n\r\n		<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n			<tbody>\r\n				<tr>\r\n					<td>\r\n					<p>Numerical Grade</p>\r\n					</td>\r\n					<td colspan=\"3\">\r\n					<p>Letter Grade</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Grade point</p>\r\n					</td>\r\n					<td>\r\n					<p>Interpretation</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>80% and above</p>\r\n					</td>\r\n					<td>\r\n					<p>A+</p>\r\n					</td>\r\n					<td>\r\n					<p>A plus</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>4.00</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Outstanding</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>75% to less than 80%</p>\r\n					</td>\r\n					<td>\r\n					<p>A</p>\r\n					</td>\r\n					<td>\r\n					<p>A regular</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>3.75</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Excellent</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>70% to less than 75%</p>\r\n					</td>\r\n					<td>\r\n					<p>A-</p>\r\n					</td>\r\n					<td>\r\n					<p>A minus</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>3.50</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Very Good</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>65% to less than 70%</p>\r\n					</td>\r\n					<td>\r\n					<p>B+</p>\r\n					</td>\r\n					<td>\r\n					<p>B plus</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>3.25</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Good</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>60% to less than 65%</p>\r\n					</td>\r\n					<td>\r\n					<p>B</p>\r\n					</td>\r\n					<td>\r\n					<p>B regular</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>3.00</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Satisfactory</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>55% to less than 60%</p>\r\n					</td>\r\n					<td>\r\n					<p>B-</p>\r\n					</td>\r\n					<td>\r\n					<p>B minus</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>2.75</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Below Satisfactory</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>50% to less than 55%</p>\r\n					</td>\r\n					<td>\r\n					<p>C+</p>\r\n					</td>\r\n					<td>\r\n					<p>C plus</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>2.50</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Average</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>45% to less than 50%</p>\r\n					</td>\r\n					<td>\r\n					<p>C</p>\r\n					</td>\r\n					<td>\r\n					<p>C regular</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>2.25</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Below Average</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>40% to less than 45%</p>\r\n					</td>\r\n					<td>\r\n					<p>D</p>\r\n					</td>\r\n					<td>\r\n					<p>-</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>2.00</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Poor</p>\r\n					</td>\r\n				</tr>\r\n				<tr>\r\n					<td>\r\n					<p>Less than 40%</p>\r\n					</td>\r\n					<td>\r\n					<p>F</p>\r\n					</td>\r\n					<td>\r\n					<p>-</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>0</p>\r\n					</td>\r\n					<td colspan=\"2\">\r\n					<p>Fail</p>\r\n					</td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n\r\n		<p>&nbsp;</p>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Year/Semester</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Sessional</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Total</strong></p>\r\n\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>21.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>20.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Grand Total</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>47</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>140</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>30.75</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>170</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:544px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p><strong>Semester</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1st&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>650</p>\r\n			</td>\r\n			<td>\r\n			<p>17.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1st&nbsp;Year 2nd&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>750</p>\r\n			</td>\r\n			<td>\r\n			<p>20.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2nd&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>800</p>\r\n			</td>\r\n			<td>\r\n			<p>21.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2nd&nbsp;Year 2nd&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>700</p>\r\n			</td>\r\n			<td>\r\n			<p>21.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3rd&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>750</p>\r\n			</td>\r\n			<td>\r\n			<p>21.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3rd&nbsp;Year 2nd&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>850</p>\r\n			</td>\r\n			<td>\r\n			<p>23.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4th&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>700</p>\r\n			</td>\r\n			<td>\r\n			<p>19.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4th&nbsp;Year 2nd&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Viva Voce</p>\r\n			</td>\r\n			<td>\r\n			<p>200</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>6000</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>165.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>First Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:661px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Introduction to Computer Systems</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1102</p>\r\n			</td>\r\n			<td>\r\n			<p>Programming Fundamentals</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1103</p>\r\n			</td>\r\n			<td>\r\n			<p>Programming Fundamentals Lab I</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CHEM 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Chemistry</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Differential Calculus and Co-ordinate Geometry</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 01</p>\r\n			</td>\r\n			<td>\r\n			<p>evsjv fvlv</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 02</p>\r\n			</td>\r\n			<td>\r\n			<p><a name=\"_GoBack\"></a>English I : Basic Communicative Skills</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>650</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>17.5</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>First Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:661px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Discrete Mathematics</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Object Oriented Programming using C++</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 1203</p>\r\n			</td>\r\n			<td>\r\n			<p>Object Oriented Programming using C++ Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>PHY 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Physics</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Introduction to Electrical Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Introduction to Electrical Engineering Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1203</p>\r\n			</td>\r\n			<td>\r\n			<p>Engineering Drawing</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Integral Calculus, Ordinary and Partial Differential Equations, and Series Solutions</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 03</p>\r\n			</td>\r\n			<td>\r\n			<p>English &ndash;II: Advanced Reading and Writing</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>750</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.5</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Second Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Data Structures</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2102</p>\r\n			</td>\r\n			<td>\r\n			<p>Data Structures Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2103</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Logic Design</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2104</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Logic Design Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Electronic Devices and Circuits</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2102</p>\r\n			</td>\r\n			<td>\r\n			<p>Electronic Devices and Circuits Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2103</p>\r\n			</td>\r\n			<td>\r\n			<p>Basic Mechanical Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Complex Variables&nbsp;and Matrices</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2105</p>\r\n			</td>\r\n			<td>\r\n			<p>Object Oriented Programming using Java</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2106</p>\r\n			</td>\r\n			<td>\r\n			<p>Object Oriented Programming using Java Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>800</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.5</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Second Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2201</p>\r\n			</td>\r\n			<td>\r\n			<p>Algorithms</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2202</p>\r\n			</td>\r\n			<td>\r\n			<p>Algorithms Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2203</p>\r\n			</td>\r\n			<td>\r\n			<p>Database Management System</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2204</p>\r\n			</td>\r\n			<td>\r\n			<p>Database Management System Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2205</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Architecture</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 2206</p>\r\n			</td>\r\n			<td>\r\n			<p>Data Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>STAT 2201</p>\r\n			</td>\r\n			<td>\r\n			<p>Statistics and Probability</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 2201</p>\r\n			</td>\r\n			<td>\r\n			<p>Vectors, Fourier Analysis, and Laplace Transforms</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>700</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Third Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3101</p>\r\n			</td>\r\n			<td>\r\n			<p>Peripherals and Interfacing</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3102</p>\r\n			</td>\r\n			<td>\r\n			<p>Peripherals and Interfacing Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3103</p>\r\n			</td>\r\n			<td>\r\n			<p>Software Engineering and Information System Design</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3104</p>\r\n			</td>\r\n			<td>\r\n			<p>Software Engineering and Information System Design Lab.&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3105</p>\r\n			</td>\r\n			<td>\r\n			<p>Operating System</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3106</p>\r\n			</td>\r\n			<td>\r\n			<p>Numerical Methods</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3107</p>\r\n			</td>\r\n			<td>\r\n			<p>Technical Writing and Presentation</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 04</p>\r\n			</td>\r\n			<td>\r\n			<p>History of Emergence of Independent Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3101</p>\r\n			</td>\r\n			<td>\r\n			<p>Financial and Managerial Accounting</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>750</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Third Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3201</p>\r\n			</td>\r\n			<td>\r\n			<p>Mathematical Analysis for Computer Science</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3202</p>\r\n			</td>\r\n			<td>\r\n			<p>Theory of Computation</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3203</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Networks</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3204</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Networks Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3205</p>\r\n			</td>\r\n			<td>\r\n			<p>Microprocessors and Microcontrollers</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3206</p>\r\n			</td>\r\n			<td>\r\n			<p>Assembly Language, Microprocessors and Microcontrollers Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3207</p>\r\n			</td>\r\n			<td>\r\n			<p>Web Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 3208</p>\r\n			</td>\r\n			<td>\r\n			<p>Web Engineering Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 08</p>\r\n			</td>\r\n			<td>\r\n			<p>Socio-economic and Political Studies of Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3201</p>\r\n			</td>\r\n			<td>\r\n			<p>Professional Ethics and Industrial Management</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>850</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>23.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Fourth Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4101</p>\r\n			</td>\r\n			<td>\r\n			<p>Artificial Intelligence</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4102</p>\r\n			</td>\r\n			<td>\r\n			<p>Artificial Intelligence Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4103</p>\r\n			</td>\r\n			<td>\r\n			<p>Compiler Design and Construction</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4104</p>\r\n			</td>\r\n			<td>\r\n			<p>Compiler Design and Construction Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4105</p>\r\n			</td>\r\n			<td>\r\n			<p>Cryptography and Network Security</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4106</p>\r\n			</td>\r\n			<td>\r\n			<p>Cryptography and Network Security Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4107</p>\r\n			</td>\r\n			<td>\r\n			<p>Simulation and Modeling</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4108</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Graphics</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>CSE 4109</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer Graphics Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>700</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.5</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Fourth Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Signal and Image Processing</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Project and Thesis</p>\r\n			</td>\r\n			<td>\r\n			<p>200</p>\r\n			</td>\r\n			<td>\r\n			<p>6.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE-****</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional Course 1</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE-****</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional Course 1 Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE-****</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional Course 2</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE-****</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional Course 2 Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>50</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>600</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>18.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Optional Courses:</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4203</p>\r\n			</td>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>Distributed Systems</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4204</p>\r\n			</td>\r\n			<td>\r\n			<p>Distributed Systems Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4205</p>\r\n			</td>\r\n			<td>\r\n			<p>System Programming</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4206</p>\r\n			</td>\r\n			<td>\r\n			<p>System Programming Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4207</p>\r\n			</td>\r\n			<td>\r\n			<p>Basic Multimedia Theory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4208</p>\r\n			</td>\r\n			<td>\r\n			<p>Multimedia Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4209</p>\r\n			</td>\r\n			<td>\r\n			<p>Algorithm Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4210</p>\r\n			</td>\r\n			<td>\r\n			<p>Algorithm Engineering Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4211</p>\r\n			</td>\r\n			<td>\r\n			<p>Computational Geometry</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4212</p>\r\n			</td>\r\n			<td>\r\n			<p>Computational Geometry Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4213</p>\r\n			</td>\r\n			<td>\r\n			<p>Machine Learning&nbsp;and Data Mining</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4214</p>\r\n			</td>\r\n			<td>\r\n			<p>Machine Learning&nbsp;and Data Mining&nbsp;Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4215</p>\r\n			</td>\r\n			<td>\r\n			<p>Pattern Recognition</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4216</p>\r\n			</td>\r\n			<td>\r\n			<p>Pattern Recognition Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4217</p>\r\n			</td>\r\n			<td>\r\n			<p>VLSI Design</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4218</p>\r\n			</td>\r\n			<td>\r\n			<p>VLSI Design Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4219</p>\r\n			</td>\r\n			<td>\r\n			<p>Wireless Networks</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4220</p>\r\n			</td>\r\n			<td>\r\n			<p>Wireless Networks Lab.</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4221</p>\r\n			</td>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>Optical Fiber Communication</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4222</p>\r\n			</td>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>Optical Fiber Communication Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4223</p>\r\n			</td>\r\n			<td style=\"vertical-align:bottom\">\r\n			<p>Human Computer Interaction</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4224</p>\r\n			</td>\r\n			<td>\r\n			<p>Human Computer Interaction Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4225</p>\r\n			</td>\r\n			<td>\r\n			<p>Mobile Computing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CSE 4226</p>\r\n			</td>\r\n			<td>\r\n			<p>Mobile Computing Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.5</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '202209070640cse_department.jpg', 'apply online', '202209070640cse_department.jpg', 4, NULL, NULL, NULL, NULL, 'HSC Diploma/Equivalent', 12000, NULL, 'cse', '2022-09-07 10:40:41', '2022-09-07 10:40:41');
INSERT INTO `departments` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(25, 14, 'Electrical and Electronic Engineering (EEE)', '<p><strong>About Us</strong></p>\r\n\r\n<p>The Department of Electrical and Electronic Engineering (EEE) at Rabindra Maitree University (RMU) currently offers BSc in Electrical and Electronic Engineering program. The department consists of experienced faculty, well-equipped classrooms and state of the art lab facilities. The department provides continuous academic improvement through consultation with faculty, industry, electrical and electronic engineering professionals and students. The offered program provides graduates with quality education, training and skills enabling them to become successful professionals.</p>\r\n\r\n<p><strong>Vision of the Department</strong></p>\r\n\r\n<p>To be a leading entity by excelling in education, research and community service in the field of electrical and electronics engineering.</p>\r\n\r\n<p><strong>Mission of the Department</strong></p>\r\n\r\n<p>The department will prepare students to be innovative, knowledgeable, articulated and skilled electronic scientists and electrical engineering by providing basic and improved theoretical and practical knowledge on electrical and electronic.</p>\r\n\r\n<p>MESSAGE FORM THE HEAD</p>\r\n\r\n<p><img alt=\"alt text\" src=\"http://www.rajtrims.com/public/themefronted/images/head_eee_img1.jpg\" />Message Of Head</p>\r\n\r\n<p>On behalf of the faculty members, staffs and me, it&rsquo;s my pleasure to welcome you to the Department of Electrical and Electronic Engineering. The Department of EEE is one of the most modern departments, as it is the latest department of Rabindra Maitree University. Present curriculum of this department aims to produce skillful manpower in the field of electrical and electronics engineering. Nature provides us with plenty of resources. At the same time nature has its hostile behaviour. Human beings need to tame this nature to support development activities and utilize the natural resources properly. Throughout the history of modern civilization, Electrical and Electronic Engineers have been doing this work and have always been at the forefront of the drive for the improvement of our standard of living. Present world is considered as the age of modern communication and technology. Today the technologies are changing at much faster pace as ever before. In every modern society, Electrical and Electronic Engineers always play the key roles in the design and development of the ever changing fields of technical aspects by bringing new technologies that improve the daily life. Along with the development of each sector, constant maintenance of the systems at a standard level is also a big task. These development and maintenance activities are impossible to undertake without the direct involvement of Electrical and Electronic Engineers. Thus, there is a very good opportunity for the engineers, especially in Bangladesh, to participate in these projects and hence building prospective careers. To keep the students current with these advancements, the curriculum is designed accordingly. In our curriculum there are numerous theoretical and practical courses directly dependent on our modern and sophisticated laboratory equipment. So, rich laboratories are playing a key role for the improved learning of the students of the department.<br />\r\n<br />\r\nProfessor A M Rezaul Karim Talukder<br />\r\nHead, Department of EEE<br />\r\nRabindra Maitree University</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Programs</strong></p>\r\n\r\n<p><strong>Undergraduate</strong></p>\r\n\r\n<p><strong>4 (Four) Year BSc in Electrical and Electronic Engineering</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OBJECTIVES OF THE PROGRAM</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>To provide adequate and understanding knowledge on&nbsp;electrical and electronics engineering.</li>\r\n		<li>To provide the students an opportunity to obtain broad&nbsp;knowledge of electronics, electrical engineering&nbsp;and&nbsp;information technology according to their individual needs.</li>\r\n		<li>To provide analytical, critical-thinking, and problem-solving skills that enable them to excel as professionals contributing to a variety of engineering roles within the various fields of electrical engineering and the high-tech industry.</li>\r\n		<li>To prepare professionally qualified and skillful design engineers, test engineers, characterization engineers, applications engineers, field engineers, hardware engineers, process engineers, control engineers, power engineers and so on.</li>\r\n		<li>To enable the graduates as effective team members possessing excellent oral and written communication skills, and assuming technical and managerial leadership roles throughout their career.</li>\r\n		<li>To develop professionalism&nbsp;of the students so that they can stay current in their field and achieve continued professional growth.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LEARNING OUTCOMES</p>\r\n\r\n<p><strong>Cognitive</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Students will be able to</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Apply knowledge of mathematics, science, and engineering.</li>\r\n		<li>Identify, formulate, and solve engineering problems.</li>\r\n		<li>Design and conduct experiments, as well as to analyze and interpret data</li>\r\n		<li>Design a system, component, or process to meet desired needs within realistic constraints such as economic, environmental, social, political, ethical, health and safety, manufacturability, and sustainability.</li>\r\n		<li>Explain professional and ethical responsibility.</li>\r\n		<li>Perform on multi-disciplinary teams.</li>\r\n		<li>Use the techniques, skills, and modern engineering tools necessary for engineering practice</li>\r\n		<li>Recognize for&nbsp;the need for, and the ability to engage in life-long (independent) learning.</li>\r\n		<li>Use existing technology in given&nbsp;problem.</li>\r\n		<li>Apply fundamental principles and method to solve a critical problem.</li>\r\n		<li>Apply mathematical and scientific reasoning to various types of engineering&nbsp;problem.</li>\r\n		<li>Formulate new technology and method to solve specific&nbsp;problem.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>AFFECTIVE</p>\r\n\r\n<p><strong>Affective</strong></p>\r\n\r\n<p>Students will be able to</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Acknowledge the importance of engineering and technology in the society.</li>\r\n		<li>Act according to the professional, ethical, legal, security and social issues and responsibilities.</li>\r\n		<li>Use current techniques, skills and&nbsp;tools for engineering practice.</li>\r\n		<li>Show interest to design, experiment, implement, and evaluate the engineering process to meet desired&nbsp;need.</li>\r\n		<li>Function effectively on teams to accomplish a common goal.</li>\r\n		<li>Help to develop mathematical foundations, algorithmic principals and&nbsp;computer science theory.</li>\r\n		<li>Share knowledge with others.</li>\r\n		<li>Act as important&nbsp;factor in the construction of electronics system of varying complexity.</li>\r\n		<li>Shows awareness of self-management and team management.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PSYCHOMOTOR</p>\r\n\r\n<p>Students will be able to</p>\r\n\r\n<ul>\r\n	<li>Communicate effectively.</li>\r\n	<li>Demonstrate the impact of engineering solutions in a global, economic, environmental, and societal context</li>\r\n	<li>Practice electrical and electronics engineering to serve state and regional industries, government agencies, or national and international industries.</li>\r\n	<li>Work professionally in one or more of the following areas: analog electronics, digital electronics, communication systems, signal processing, control systems, and computer-based systems.</li>\r\n	<li>Carry out their technical competence through lifelong learning, including entering and succeeding in an advanced degree program in a field such as engineering, science, or business.</li>\r\n	<li>Use mathematical tools for analytical and numerical modeling.</li>\r\n	<li>Carry out measurements to verify and characterize electronic circuits and components.</li>\r\n	<li>Demonstrate contemporary issues in electrical engineering practice</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Competent enough to use interpersonal skills.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Follow existing technology and utilize it in a proper way.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GENERIC SKILLS</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Communication (both internal and external)</li>\r\n		<li>Commercial Awareness</li>\r\n		<li>Project Management/planning skills</li>\r\n		<li>Ability to work independently</li>\r\n		<li>Innovative/creative solution oriented</li>\r\n		<li>Ability to work quality standard</li>\r\n		<li>Organizational skills</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Teaching Strategy</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Medium of Instruction</em></p>\r\n\r\n<p>The medium of instruction and answer in the examinations shall be English. But Bengali course shall be taught in Bengali.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>DURATION OF THE PROGRAM</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a name=\"OLE_LINK4\"></a>The duration of this program shall be 8(eight) semesters in 4(four) academic years. There shall be 2(two) semester in each academic year. Each semester will be of 6(six) months consisting of 18(eighteen) weeks of which 13(thirteen) weeks for class teaching, at least 1(one) week as break and 4(four) weeks for holding the semester final examination. For each course there will be 1(one) lecture of 60 minutes for each credit in every week and minimum 6(six) hour for tutorial/open academic discussions in every semester. In case of practical course 2(two) class hour in a week shall be considered as one credit. Students shall sit for the oral examination (Viva-Voce) at the end of 2nd&nbsp;semester final examination in each academic year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>COURSE, MARKS AND CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The ICE (B.Sc. Engg.) program shall consist of 170 credits. The number of courses including marks and credits of each course will be determined by the academic committee of the concerned department and approved by the university and UGC authority. Among the all courses, minimum 10 (ten) courses should be allied.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ASSESSMENT STRATEGY</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Course Evaluation</em></p>\r\n\r\n<p>Performance of students in a theoretical course shall be evaluated as follows:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Serial</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Item</p>\r\n			</td>\r\n			<td>\r\n			<p>Marks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>01</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Midterm Test</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>02</p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p>Internal Evaluation</p>\r\n			</td>\r\n			<td>\r\n			<p>Class performance/ participation /class study/ Quiz/ Assignment/ class test without notice</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>03</p>\r\n			</td>\r\n			<td>\r\n			<p>Class Attendance</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Internal Evaluation Total</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>04</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Year-end final Examination</p>\r\n			</td>\r\n			<td>\r\n			<p><a name=\"_Hlk511118709\"></a>60</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Performance of students in a practical course will be evaluated as follows:</p>\r\n\r\n<table align=\"left\" border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:612px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Serial</p>\r\n			</td>\r\n			<td>\r\n			<p>Item</p>\r\n			</td>\r\n			<td>\r\n			<p>Marks</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>01</p>\r\n			</td>\r\n			<td>\r\n			<p>Continuous Assessment (Quiz 5, class test 5, assignment 5)</p>\r\n			</td>\r\n			<td>\r\n			<p>40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>02</p>\r\n			</td>\r\n			<td>\r\n			<p>lab report and term paper 15, lab attendance 10) Project (work 10, report 5, presentation 5)</p>\r\n			</td>\r\n			<td>\r\n			<p>20</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>03</p>\r\n			</td>\r\n			<td>\r\n			<p>Lab Examination (script 15, experiment 15, viva 10)</p>\r\n			</td>\r\n			<td>\r\n			<p>40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The marks for class attendance shall be as follows:</p>\r\n\r\n<p><strong>Attendance Marks.</strong></p>\r\n\r\n<p>90% and above. 10</p>\r\n\r\n<p>80% to 89% 8</p>\r\n\r\n<p>70% to 79% 6</p>\r\n\r\n<p>60% to 69% 4</p>\r\n\r\n<p>50% to 59% 2</p>\r\n\r\n<p>Less than 50% 0</p>\r\n\r\n<p>[<strong>N.B.</strong>&nbsp;A student will not be allowed to sit for the examination of a course if his/her class attendance in that course is less than 50%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GRADING SYSTEM</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Total marks obtained in each course and viva-voce examinations shall be converted into LG (Letter Grade) and GP (Grade point) as under:</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Numerical Grade</p>\r\n			</td>\r\n			<td colspan=\"3\">\r\n			<p>Letter Grade</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Grade point</p>\r\n			</td>\r\n			<td>\r\n			<p>Interpretation</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>80% and above</p>\r\n			</td>\r\n			<td>\r\n			<p>A+</p>\r\n			</td>\r\n			<td>\r\n			<p>A plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>4.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Outstanding</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>75% to less than 80%</p>\r\n			</td>\r\n			<td>\r\n			<p>A</p>\r\n			</td>\r\n			<td>\r\n			<p>A regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.75</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Excellent</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>70% to less than 75%</p>\r\n			</td>\r\n			<td>\r\n			<p>A-</p>\r\n			</td>\r\n			<td>\r\n			<p>A minus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.50</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Very Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>65% to less than 70%</p>\r\n			</td>\r\n			<td>\r\n			<p>B+</p>\r\n			</td>\r\n			<td>\r\n			<p>B plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.25</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Good</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>60% to less than 65%</p>\r\n			</td>\r\n			<td>\r\n			<p>B</p>\r\n			</td>\r\n			<td>\r\n			<p>B regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>55% to less than 60%</p>\r\n			</td>\r\n			<td>\r\n			<p>B-</p>\r\n			</td>\r\n			<td>\r\n			<p>B minus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.75</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Below Satisfactory</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>50% to less than 55%</p>\r\n			</td>\r\n			<td>\r\n			<p>C+</p>\r\n			</td>\r\n			<td>\r\n			<p>C plus</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.50</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>45% to less than 50%</p>\r\n			</td>\r\n			<td>\r\n			<p>C</p>\r\n			</td>\r\n			<td>\r\n			<p>C regular</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.25</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Below Average</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>40% to less than 45%</p>\r\n			</td>\r\n			<td>\r\n			<p>D</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>2.00</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Poor</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Less than 40%</p>\r\n			</td>\r\n			<td>\r\n			<p>F</p>\r\n			</td>\r\n			<td>\r\n			<p>-</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>0</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Fail</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Year/Semester</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Sessional</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Total</strong></p>\r\n\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>21.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>20.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Grand Total</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>47</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>140</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>30.75</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>170</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:406px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>1</strong><strong>st</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>18.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>1</strong><strong>st</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>17.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>2</strong><strong>nd</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>2</strong><strong>nd</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>3</strong><strong>rd</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>3</strong><strong>rd</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>4</strong><strong>th</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>4</strong><strong>th</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Total</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>160.00</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>1</strong><strong>st</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:656px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 01</p>\r\n			</td>\r\n			<td>\r\n			<p>Bengali Language</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 02</p>\r\n			</td>\r\n			<td>\r\n			<p>English I : Basic Communicative Skills</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Differential and Integral Calculus</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>PHY 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Physics I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1101</p>\r\n			</td>\r\n			<td>\r\n			<p>Electrical Circuits I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1102</p>\r\n			</td>\r\n			<td>\r\n			<p>Electronics I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>18.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>1</strong><strong>st</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:657px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 03</p>\r\n			</td>\r\n			<td>\r\n			<p>English II : Advance Reading and Writing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Ordinary and Partial Differential Equations</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Linear Algebra and Complex Variables</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>PHY 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Physics II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>PHY 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Physics Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Electrical Circuits II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Electrical Circuits Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>17.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2</strong><strong>nd</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:657px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 04</p>\r\n			</td>\r\n			<td>\r\n			<p>History of Emergence of Independent Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>MATH 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Analytic and Vector Geometry</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CHEM 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Chemistry</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>CHEM 2102</p>\r\n			</td>\r\n			<td>\r\n			<p>Chemistry Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Structured Programming Language</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2102</p>\r\n			</td>\r\n			<td>\r\n			<p>Structured Programming Language Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2103</p>\r\n			</td>\r\n			<td>\r\n			<p>Electronic Circuits II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2104</p>\r\n			</td>\r\n			<td>\r\n			<p>Electronic Circuits Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2105</p>\r\n			</td>\r\n			<td>\r\n			<p>Analog Electronics I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2</strong><strong>nd</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:657px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit Hours</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 08</p>\r\n			</td>\r\n			<td>\r\n			<p>Socio-Economic and Political Studies of Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 14</p>\r\n			</td>\r\n			<td>\r\n			<p>Environmental Science</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2201</p>\r\n			</td>\r\n			<td>\r\n			<p>Energy Conversions I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2202</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Logic</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2203</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Logic Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2204</p>\r\n			</td>\r\n			<td>\r\n			<p>Analog Electronics II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2205</p>\r\n			</td>\r\n			<td>\r\n			<p>Analog Electronics Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2206</p>\r\n			</td>\r\n			<td>\r\n			<p>Basic Mechanical Engineering</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 2207</p>\r\n			</td>\r\n			<td>\r\n			<p>Basic Mechanical Engineering Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3</strong><strong>rd</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:658px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit Hours</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 15</p>\r\n			</td>\r\n			<td>\r\n			<p>Industrial and Operations Management</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 16</p>\r\n			</td>\r\n			<td>\r\n			<p>Engineering Ethics</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MATH 3101</p>\r\n			</td>\r\n			<td>\r\n			<p>Statistics and Probability</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3101</p>\r\n			</td>\r\n			<td>\r\n			<p>Energy Conversions II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3102</p>\r\n			</td>\r\n			<td>\r\n			<p>Energy Conversions Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3103</p>\r\n			</td>\r\n			<td>\r\n			<p>Measurements and Instrumentation</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3104</p>\r\n			</td>\r\n			<td>\r\n			<p>Measurements and Instrumentation Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3105</p>\r\n			</td>\r\n			<td>\r\n			<p>Electromagnetic Fields and Waves</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3106</p>\r\n			</td>\r\n			<td>\r\n			<p>Power System I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3</strong><strong>rd</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:658px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit Hours</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3201</p>\r\n			</td>\r\n			<td>\r\n			<p>Signals and Linear Systems Analysis</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3202</p>\r\n			</td>\r\n			<td>\r\n			<p>Electrical Services Design</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3203</p>\r\n			</td>\r\n			<td>\r\n			<p>Communication Theory</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3204</p>\r\n			</td>\r\n			<td>\r\n			<p>Communication Theory Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3205</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Signal Processing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3206</p>\r\n			</td>\r\n			<td>\r\n			<p>Digital Signal Processing Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3207</p>\r\n			</td>\r\n			<td>\r\n			<p>Electrical Properties of Materials</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3208</p>\r\n			</td>\r\n			<td>\r\n			<p>Microprocessor and Interfacing</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3209</p>\r\n			</td>\r\n			<td>\r\n			<p>Microprocessor and Interfacing Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 3210</p>\r\n			</td>\r\n			<td>\r\n			<p>Engineering Drawing</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4</strong><strong>th</strong><strong>&nbsp;Year 1</strong><strong>st</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:659px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit Hours</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4101</p>\r\n			</td>\r\n			<td>\r\n			<p>Numerical Analysis</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4102</p>\r\n			</td>\r\n			<td>\r\n			<p>Solid State Devices</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4103</p>\r\n			</td>\r\n			<td>\r\n			<p>Industrial and Power Electronics</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4104</p>\r\n			</td>\r\n			<td>\r\n			<p>Industrial and Power Electronics Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4105</p>\r\n			</td>\r\n			<td>\r\n			<p>Control Systems</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4106</p>\r\n			</td>\r\n			<td>\r\n			<p>Control Systems Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4107</p>\r\n			</td>\r\n			<td>\r\n			<p>Industrial Training</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 41XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional I</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 41XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional I Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4</strong><strong>th</strong><strong>&nbsp;Year 2</strong><strong>nd</strong><strong>&nbsp;Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credit Hours</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>VLSI Design</p>\r\n			</td>\r\n			<td>\r\n			<p>2.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 4202</p>\r\n			</td>\r\n			<td>\r\n			<p>VLSI Design Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional II</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional II Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional III</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional III Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional IV</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 42XX</p>\r\n			</td>\r\n			<td>\r\n			<p>Optional IV Lab</p>\r\n			</td>\r\n			<td>\r\n			<p>1.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EEE 5000</p>\r\n			</td>\r\n			<td>\r\n			<p>Project/Thesis</p>\r\n			</td>\r\n			<td>\r\n			<p>6.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Total :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.0</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '202209070648EEE_department.jpg', 'apply online', '202209070648EEE_department.jpg', NULL, NULL, NULL, NULL, NULL, 'HSC Diploma/Equivalent', 42000, NULL, 'EEE', '2022-09-07 10:48:16', '2022-09-07 10:48:16');
INSERT INTO `departments` (`id`, `fid`, `name`, `description`, `image`, `link`, `course_brochure`, `duration`, `grading_system`, `course_curriculum`, `fee_schedules`, `semester_details`, `eligibility`, `course_fee`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(26, 15, 'Business Administration', '<p><strong>About Us</strong></p>\r\n\r\n<p>The Department of Business Administration at Rabindra Maitree University currently offers BBA degree in four majors. The major offered from the department are Accounting, Management, Finance and Banking. The department aims to produce skilled, corporate and dynamic leaders, e.g, teachers, managers, cadres, executives and others by developing comprehensive understanding of the business economics and environment, enabling the students to equip with knowledge in business and technology and motivating the students to the application of business study in any area of practical concern.</p>\r\n\r\n<p><strong>Vision of the Department</strong></p>\r\n\r\n<p>To be a progressive and leading entity by developing ideas and preparing business professionals who will be compatible and responsible decision makers.</p>\r\n\r\n<p><strong>Mission of the Department</strong></p>\r\n\r\n<p>The department is committed to educating and developing future business leaders and entrepreneurs to be capable of leading organizations in a diverse and dynamic way to-</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Assemble insightful knowledge, techniques and&nbsp;skills</li>\r\n		<li>Critically examine highly&nbsp;intellectual business mindset</li>\r\n		<li>Initiate business practices.</li>\r\n		<li>Generate innovative strategies to reach the desired aim and</li>\r\n		<li>Modify the contribution to cultural, social and national economy at large.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>MESSAGE FORM THE HEAD</h2>\r\n\r\n<p>Rabindra Maitree University is one of the leading private Universities for providing higher education in Bangladesh. This university is devoted to spread knowledge and education. The Department of Business Administration is one of the most prestigious departments in our University. The department starts with BBA program major in Accounting, Management, Marketing, Finance and Banking. The main objective of this department is to provide professional knowledge and skills to enhance the efficiency and effectiveness in business and non-business organizations to face the upcoming challenges in the competitive business world. The department of business administration is committed to create future business leaders through academic excellence. The department offers 4 year BBA program at graduate level. The curriculum of the department encourages the students to develop their analytical skill. The department provides well-furnished classrooms with enjoyable teaching learning environment. The department has some qualified and dedicated faculty members who worked hard to make the department a distinctive one. I hope our students will be well placed and well developed in near future.<br />\r\n<br />\r\nProfessor Dr. Md. Shahjahan Ali<br />\r\nHead, Department of Business Administration<br />\r\nRabindra Maitree University</p>\r\n\r\n<p><strong>Programs</strong></p>\r\n\r\n<p><strong>Undergraduate</strong></p>\r\n\r\n<p><strong>4 (Four) Year B.B.A. Program</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Objectives of the Program</strong></p>\r\n\r\n<p>On the successful completion of the Bachelor of Business Administration program, the graduates will be able to:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li><strong>Evaluate</strong>&nbsp;leadership skills, creativity&nbsp;and&nbsp;entrepreneurship.</li>\r\n		<li><strong>Analyze</strong>&nbsp;business problems and provide solutions by using logical reasoning patterns for evaluating information, materials&nbsp;and&nbsp;data.</li>\r\n		<li><strong>Explain</strong>&nbsp;the competency in the use of technology and information systems in modern organizational operations.</li>\r\n		<li><strong>Demonstrate</strong>&nbsp;entrepreneurial skills for creating and managing innovation, new business development&nbsp;and&nbsp;high-growth potential entity.</li>\r\n		<li><strong>Describe</strong>&nbsp;the skills required to work and lead effectively in a team-based environment.\r\n		<p>&nbsp;</p>\r\n\r\n		<p>LEARNING OUTCOMES</p>\r\n\r\n		<p><strong>Learning Outcomes</strong></p>\r\n\r\n		<p><em><strong>Cognitive</strong></em></p>\r\n\r\n		<p>Students will be able to</p>\r\n		Cognitive\r\n\r\n		<p>&nbsp;</p>\r\n\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li><strong>Describe</strong>&nbsp;the role of and apply economics, accounting, financial management, human resource management and marketing knowledge and skills in</li>\r\n				<li>ecision making and management of organizations.</li>\r\n				<li><strong>Justify</strong>&nbsp;sound financial management techniques and analytical skills to authentic operations and strategic management issues of organizations.</li>\r\n				<li><strong>Demonstrate</strong>&nbsp;contemporary strategic management practices compatible with organizational sustainability, ethical behavior&nbsp;and&nbsp;effective workforce relations.</li>\r\n				<li>Critically&nbsp;<strong>evaluate</strong>&nbsp;the findings of research to solve&nbsp;business related&nbsp;problems.</li>\r\n				<li><strong>Summarize</strong>&nbsp;the concepts of information technology (IT) and how IT can improve organizational performance.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n\r\n		<p>&nbsp;</p>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>AFFECTIVE</strong></p>\r\n\r\n<p><strong>Describe</strong>&nbsp;ethical and social responsibility issues in a business environment and know how to apply a process of ethical inquiry.</p>\r\n\r\n<ul>\r\n	<li><strong>Assess</strong>&nbsp;functional and cross-functional knowledge to solve business problems.</li>\r\n	<li><strong>Demonstrate</strong>&nbsp;ability to share ideas and findings clearly in written and oral expression</li>\r\n	<li><strong>Verify</strong>&nbsp;a clear and concise topic statement of the issue&rsquo;s to be addressed.</li>\r\n	<li><strong>Explain</strong>&nbsp;the approach taken to evaluate an issue relating to a business topic.</li>\r\n	<li><strong>Summarize</strong>&nbsp;the result of the analysis of an issue in a clear set of conclusions.</li>\r\n	<li><strong>Generate</strong>&nbsp;the ability to present the topic in a professional manner.</li>\r\n	<li><strong>Evaluate</strong>&nbsp;ability&nbsp;to create and sustain a positive impression, confidence&nbsp;and&nbsp;advance in a career.</li>\r\n	<li><strong>Design</strong>&nbsp;the ability to self-evaluate, modify behavior and meet or exceed obligations.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>PSYCHOMOTOR</p>\r\n\r\n	<p><strong>Explain</strong>&nbsp;foundational knowledge in accounting, economics, finance, management, and marketing in&nbsp;application&nbsp;of concepts and theories.&nbsp;</p>\r\n	</li>\r\n	<li><strong>Demonstrate</strong>&nbsp;effective skills in written and oral communications using appropriate technologies.</li>\r\n	<li><strong>Describe</strong>&nbsp;an ability to integrate the concepts of the core areas of business.</li>\r\n	<li><strong>Interpret</strong>&nbsp;awareness&nbsp;to&nbsp;the importance of the ethical requirements of business activities.</li>\r\n	<li><strong>Demonstrate</strong>&nbsp;an ability to conduct methodological, secondary research into business issues, which may relate to general business or to a specific business function.</li>\r\n	<li><strong>Apply</strong>&nbsp;knowledge and skills to solve business problems.</li>\r\n	<li><strong>Reflect&nbsp;</strong>a global perspective and an awareness of how cultural differences impact businesses.\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>GENERIC SKILLS</strong></p>\r\n\r\n	<p>Problem&nbsp;<strong>solving.</strong></p>\r\n	</li>\r\n	<li>Business&nbsp;<strong>analysis&nbsp;</strong>and reasoning</li>\r\n	<li><strong>Counseling</strong>&nbsp;business firm and client.</li>\r\n	<li><strong>Effective&nbsp;</strong>communication skills.</li>\r\n	<li>Work both individually and in groups to conduct business research and</li>\r\n	<li>Critically&nbsp;<strong>evaluate</strong>&nbsp;the findings to solve&nbsp;business related&nbsp;problems</li>\r\n	<li><strong>Appreciating</strong>&nbsp;Business and Social Values.\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n	<strong>Teaching Strategy</strong>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><em><strong>Medium of Instruction</strong></em></p>\r\n\r\n	<p>The medium of instruction and answer in the examinations shall be English. But BNG courses will be taught in Bengali.</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><em><strong>Duration of the Program and Examination</strong></em></p>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>The duration of this program shall be 8 (eight) semesters in 4 (four) academic years. There shall be 2 (two) semester in each academic year. Each semester will be 6 (six) months consisting of 18 (eighteen) weeks of which 13 (thirteen) weeks for class teaching, at least 1 (one) week as break and 4 (four) weeks for holding the semester final examination. For each&nbsp;courses&nbsp;there will be 1 (one) lecture of 60 minutes for each credit in every week &amp; minimum 06 (six) hours for tutorial/open academic discussions in every semester. In case of practical&nbsp;course&nbsp;two class hours in a week will be considered as one credit.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>Students shall sit for the oral examination (viva-voce) at the end of every year and Internship/Project Paper/Research Report and Defense at the end of final written examination of 8th&nbsp;Semester.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>\r\n			<ol>\r\n				<li>After the completion of the 4th&nbsp;year 2nd&nbsp;semester final examination, each student is required to undergo 3 months long internship program and to present/defense the report on his/her study/observation before the faculties of the department.</li>\r\n			</ol>\r\n			</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><em><strong>Distribution of Courses, Marks and Credit Hours</strong></em></p>\r\n\r\n	<p>The BBA (Honors) program shall consist of 135 credits and shall be evaluated on the basis of 4700 total marks.</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Assessment Strategy</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><em><strong>Course Evaluation</strong></em></p>\r\n\r\n	<ol>\r\n		<li>\r\n		<ol>\r\n			<li>Performance of students in a theoretical course will be evaluated as follows:</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Internal Evaluation:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:631px\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n				<p>Mid-term test</p>\r\n				</td>\r\n				<td>\r\n				<p>1 &times; 20 = 20</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Class Performance / Participation/ Class Study/ Quiz/ Assignment/ Class test without notice</p>\r\n				</td>\r\n				<td>\r\n				<p>= 10</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Class Attendance</p>\r\n				</td>\r\n				<td>\r\n				<p>= 10</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Semester-end Final Examination</p>\r\n				</td>\r\n				<td>\r\n				<p>= 60</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>The marks for class attendance shall be as follows:</p>\r\n\r\n	<p><strong>Attendance Marks.</strong></p>\r\n\r\n	<p>90% and above. 10</p>\r\n\r\n	<p>80% to 89% 8</p>\r\n\r\n	<p>70% to 79% 6</p>\r\n\r\n	<p>60% to 69% 4</p>\r\n\r\n	<p>50% to 59% 2</p>\r\n\r\n	<p>Less than 50% 0</p>\r\n\r\n	<p>[<strong>N.B.</strong>&nbsp;A student will not be allowed to sit for the examination of a course if his/her class attendance in that course is less than 50%.</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>GRADING SYSTEM</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>Total marks obtained in each course and viva-voce examinations shall be converted into LG (Letter Grade) and GP (Grade point) as under:</p>\r\n\r\n	<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:638px\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n				<p>Numerical Grade</p>\r\n				</td>\r\n				<td colspan=\"3\">\r\n				<p>Letter Grade</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Grade point</p>\r\n				</td>\r\n				<td>\r\n				<p>Interpretation</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>80% and above</p>\r\n				</td>\r\n				<td>\r\n				<p>A+</p>\r\n				</td>\r\n				<td>\r\n				<p>A plus</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>4.00</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Outstanding</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>75% to less than 80%</p>\r\n				</td>\r\n				<td>\r\n				<p>A</p>\r\n				</td>\r\n				<td>\r\n				<p>A regular</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>3.75</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Excellent</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>70% to less than 75%</p>\r\n				</td>\r\n				<td>\r\n				<p>A-</p>\r\n				</td>\r\n				<td>\r\n				<p>A minus</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>3.50</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Very Good</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>65% to less than 70%</p>\r\n				</td>\r\n				<td>\r\n				<p>B+</p>\r\n				</td>\r\n				<td>\r\n				<p>B plus</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>3.25</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Good</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>60% to less than 65%</p>\r\n				</td>\r\n				<td>\r\n				<p>B</p>\r\n				</td>\r\n				<td>\r\n				<p>B regular</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>3.00</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Satisfactory</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>55% to less than 60%</p>\r\n				</td>\r\n				<td>\r\n				<p>B-</p>\r\n				</td>\r\n				<td>\r\n				<p>B minus</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>2.75</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Below Satisfactory</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>50% to less than 55%</p>\r\n				</td>\r\n				<td>\r\n				<p>C+</p>\r\n				</td>\r\n				<td>\r\n				<p>C plus</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>2.50</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Average</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>45% to less than 50%</p>\r\n				</td>\r\n				<td>\r\n				<p>C</p>\r\n				</td>\r\n				<td>\r\n				<p>C regular</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>2.25</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Below Average</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>40% to less than 45%</p>\r\n				</td>\r\n				<td>\r\n				<p>D</p>\r\n				</td>\r\n				<td>\r\n				<p>-</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>2.00</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Poor</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Less than 40%</p>\r\n				</td>\r\n				<td>\r\n				<p>F</p>\r\n				</td>\r\n				<td>\r\n				<p>-</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>0</p>\r\n				</td>\r\n				<td colspan=\"2\">\r\n				<p>Fail</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CREDIT HOURS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:613px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Sl.</strong></p>\r\n\r\n			<p><strong>No.</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Year/Semester</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Theory</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Sessional</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Total</strong></p>\r\n\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>No. of Courses</strong></p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>22.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>1st/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>4.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>19.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>21.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2nd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3rd/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>5</p>\r\n			</td>\r\n			<td>\r\n			<p>15.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4</p>\r\n			</td>\r\n			<td>\r\n			<p>5.25</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>20.25</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/1st</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>6</p>\r\n			</td>\r\n			<td>\r\n			<p>18.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>3.00</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.00</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>4th/2nd</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>7</p>\r\n			</td>\r\n			<td>\r\n			<p>20.00</p>\r\n			</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>3</p>\r\n			</td>\r\n			<td>\r\n			<p>1.50</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>21.50</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Grand Total</strong><strong></strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>47</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>140</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>24</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>30.75</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>170</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:672px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Semester</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1st&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1st&nbsp;year 2nd&nbsp;semester</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2nd&nbsp;year 1st&nbsp;semester</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2nd&nbsp;year 2nd&nbsp;semester</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3rd&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3rd&nbsp;year 2nd&nbsp;semester</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4th&nbsp;Year 1st&nbsp;Semester</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4th&nbsp;year 2nd&nbsp;semester</p>\r\n			</td>\r\n			<td>\r\n			<p>700</p>\r\n			</td>\r\n			<td>\r\n			<p>18.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Viva Voce</p>\r\n			</td>\r\n			<td>\r\n			<p>200</p>\r\n			</td>\r\n			<td>\r\n			<p>3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>4700</p>\r\n			</td>\r\n			<td>\r\n			<p>135.0</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>First Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:672px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1101</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Introduction to Business</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1102</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Principles of Accounting</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1103</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Business Mathematics</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 01</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Bengali Language</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 02</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>English-1 : Basic Communicative Skills</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>First Year Second Semester</p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1201</p>\r\n			</td>\r\n			<td>\r\n			<p>Principles of Marketing</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1202</p>\r\n			</td>\r\n			<td>\r\n			<p>Business Communication</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1203</p>\r\n			</td>\r\n			<td>\r\n			<p>Principles of Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 1204</p>\r\n			</td>\r\n			<td>\r\n			<p>Business Statistics</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 03</p>\r\n			</td>\r\n			<td>\r\n			<p>English-2 Advanced Reading and Writing</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Second Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2101</p>\r\n			</td>\r\n			<td>\r\n			<p>Principles of Finance</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2102</p>\r\n			</td>\r\n			<td>\r\n			<p>Marketing Management</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2103</p>\r\n			</td>\r\n			<td>\r\n			<p>Organizational Behavior</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 06</p>\r\n			</td>\r\n			<td>\r\n			<p>Computer and Information Technology</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 07</p>\r\n			</td>\r\n			<td>\r\n			<p>Government, Politics and Constitution</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Second Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2201</p>\r\n			</td>\r\n			<td>\r\n			<p>Insurance and Risk Management</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2202</p>\r\n			</td>\r\n			<td>\r\n			<p>Cost Accounting</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2203</p>\r\n			</td>\r\n			<td>\r\n			<p>Commercial Law</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 2204</p>\r\n			</td>\r\n			<td>\r\n			<p>Theory and Practice of Banking</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 04</p>\r\n			</td>\r\n			<td>\r\n			<p>History of Emergence of Independent Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Third Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3101</p>\r\n			</td>\r\n			<td>\r\n			<p>Auditing</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3102</p>\r\n			</td>\r\n			<td>\r\n			<p>Taxation in Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3103</p>\r\n			</td>\r\n			<td>\r\n			<p>Labour and Industrial Laws of Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3104</p>\r\n			</td>\r\n			<td>\r\n			<p>Management Information Systems</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 09</p>\r\n			</td>\r\n			<td>\r\n			<p>Basic Sociology</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 10</p>\r\n			</td>\r\n			<td>\r\n			<p>Principles of Economics</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Third Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3201</p>\r\n			</td>\r\n			<td>\r\n			<p>Financial Management</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3202</p>\r\n			</td>\r\n			<td>\r\n			<p>Entrepreneurship Development</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3203</p>\r\n			</td>\r\n			<td>\r\n			<p>Production Management</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3204</p>\r\n			</td>\r\n			<td>\r\n			<p>Management Science</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 3205</p>\r\n			</td>\r\n			<td>\r\n			<p>Islamic Finance and Banking</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GED 08</p>\r\n			</td>\r\n			<td>\r\n			<p>Socio Economic and Political Studies of Bangladesh</p>\r\n			</td>\r\n			<td>\r\n			<p>100</p>\r\n			</td>\r\n			<td>\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td>\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Fourth Year First Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4101</p>\r\n			</td>\r\n			<td>\r\n			<p>Human Resource Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4102</p>\r\n			</td>\r\n			<td>\r\n			<p>Management Accounting</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4103</p>\r\n			</td>\r\n			<td>\r\n			<p>Project Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4104</p>\r\n			</td>\r\n			<td>\r\n			<p>Supply Chain Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4105</p>\r\n			</td>\r\n			<td>\r\n			<p>Decision Support Systems</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4106</p>\r\n			</td>\r\n			<td>\r\n			<p>Research Methodology</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>600</p>\r\n			</td>\r\n			<td>\r\n			<p>18</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Fourth Year Second Semester</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"7\" cellspacing=\"0\" style=\"width:673px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Course Code</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Course Title</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Marks</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong>Credits</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"vertical-align:top\">\r\n			<p><strong>MAJOR in ACCOUNTING - ELECTIVES</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ACT 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Applied Accounting Theory</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ACT 4202</p>\r\n			</td>\r\n			<td>\r\n			<p>Advanced Cost Accounting</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ACT 4203</p>\r\n			</td>\r\n			<td>\r\n			<p>Strategic Management Accounting</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ACT 4204</p>\r\n			</td>\r\n			<td>\r\n			<p>Corporate Financial Reporting</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ACT 4205</p>\r\n			</td>\r\n			<td>\r\n			<p>Corporate Tax Planning</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"vertical-align:top\">\r\n			<p><strong>MANAGEMENT- ELECTIVES</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MGT 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Management Thought</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MGT 4202</p>\r\n			</td>\r\n			<td>\r\n			<p>Project Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MGT 4203</p>\r\n			</td>\r\n			<td>\r\n			<p>Strategic Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MGT 4204</p>\r\n			</td>\r\n			<td>\r\n			<p>Organization Development</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MGT 4205</p>\r\n			</td>\r\n			<td>\r\n			<p>Management Practices in Bangladesh</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"vertical-align:top\">\r\n			<p><strong>MARKETING- ELECTIVES</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MKT 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Brand Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MKT 4202</p>\r\n			</td>\r\n			<td>\r\n			<p>Sales Management</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MKT 4203</p>\r\n			</td>\r\n			<td>\r\n			<p>Services Marketing</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MKT 4204</p>\r\n			</td>\r\n			<td>\r\n			<p>Advertising and Sales Promotion</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MKT 4205</p>\r\n			</td>\r\n			<td>\r\n			<p>Consumer Behavior</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"vertical-align:top\">\r\n			<p><a name=\"_GoBack\"></a></p>\r\n\r\n			<p><strong>FINANCE and BANKING- ELECTIVES</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>FIN 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Public Finance and Taxation</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>FIN 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Financial Market and Institutions</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>FIN 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>International Trade Finance</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>FIN 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>Comparative Financial Systems</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>FIN 4201</p>\r\n			</td>\r\n			<td>\r\n			<p>E-Banking and E-Commerce</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>100</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>500</p>\r\n			</td>\r\n			<td>\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4207</p>\r\n			</td>\r\n			<td>\r\n			<p>Viva-Voce</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>200</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>BUS 4208</p>\r\n			</td>\r\n			<td>\r\n			<p>Internship\\Project Paper\\Research Report and Defense</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>200</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p>Total</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>4700</p>\r\n			</td>\r\n			<td>\r\n			<p>135</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '202209070656Business Administration_department.jpg', 'apply online', '202209070656Business Administration_department.jpg', NULL, NULL, NULL, NULL, NULL, '4', 420000, NULL, 'BA', '2022-09-07 10:54:25', '2022-09-07 10:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'DGM', '2022-05-19 12:49:11', '2022-05-19 12:49:11'),
(6, 'MD', '2022-05-19 12:51:25', '2022-05-19 12:51:25'),
(8, 'Chairman', '2022-08-23 12:44:07', '2022-08-23 12:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `disciplinarycoms`
--

CREATE TABLE `disciplinarycoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disciplinarycoms`
--

INSERT INTO `disciplinarycoms` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(5, 'professor', 'ABRAR JIMI', 'anamit08@gmail.com', 'housing', '202206190321hasanul_haq.png', '2022-06-19 07:21:45', '2022-06-19 07:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-02-25 02:17:30', '2022-02-25 02:17:30'),
(2, 2, 1, 1, '2022-02-25 02:23:17', '2022-02-25 02:23:17'),
(3, 3, 1, 1, '2022-02-25 02:25:05', '2022-02-25 02:25:05'),
(4, 4, 1, 1, '2022-02-25 02:29:27', '2022-02-25 02:29:27'),
(5, 5, 1, 1, '2022-02-25 02:34:25', '2022-02-25 02:34:25'),
(6, 6, 1, 1, '2022-02-25 06:52:49', '2022-02-25 06:52:49'),
(7, 7, 1, 1, '2022-02-25 08:31:41', '2022-02-25 08:31:41'),
(8, 8, 1, 1, '2022-03-06 12:12:48', '2022-03-06 12:12:48'),
(9, 9, 1, 1, '2022-03-06 12:20:55', '2022-03-06 12:20:55'),
(10, 10, 1, 1, '2022-03-11 05:11:24', '2022-03-11 05:11:24'),
(11, 11, 1, 1, '2022-03-20 13:02:17', '2022-03-20 13:02:17'),
(12, 12, 1, 1, '2022-04-05 09:23:55', '2022-04-05 09:23:55'),
(13, 13, 1, 1, '2022-05-11 16:30:28', '2022-05-11 16:30:28'),
(14, 14, 1, 1, '2022-05-12 08:24:26', '2022-05-12 08:24:26'),
(15, 15, 1, 1, '2022-05-15 08:33:33', '2022-05-15 08:33:33'),
(16, 16, 1, 1, '2022-05-15 08:54:49', '2022-05-15 08:54:49'),
(17, 17, 1, 1, '2022-05-15 09:27:47', '2022-05-15 09:27:47'),
(18, 18, 1, 1, '2022-05-16 16:55:09', '2022-05-16 16:55:09'),
(19, 19, 1, 1, '2022-05-16 17:16:47', '2022-05-16 17:16:47'),
(20, 20, 1, 1, '2022-05-16 21:04:08', '2022-05-16 21:04:08'),
(21, 21, 1, 1, '2022-06-20 10:12:44', '2022-06-20 10:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_receives`
--

CREATE TABLE `dispatch_receives` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dispatch_receives`
--

INSERT INTO `dispatch_receives` (`id`, `reference_no`, `to_title`, `address`, `note`, `from_title`, `date`, `image`, `created_at`, `updated_at`, `type`) VALUES
(3, '2020', 'chairman', '5/12 kalabagan', 'notice', 'dhaka', '2022-05-17', NULL, '2022-05-16 14:04:44', '2022-05-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeedepartments`
--

CREATE TABLE `employeedepartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeedepartments`
--

INSERT INTO `employeedepartments` (`id`, `fid`, `name`, `description`, `uid`, `created_at`, `updated_at`) VALUES
(10, NULL, 'Bengali', NULL, NULL, '2022-05-30 13:28:54', '2022-05-30 13:28:54'),
(11, NULL, 'English', NULL, NULL, '2022-05-30 13:29:20', '2022-05-30 13:29:20'),
(13, NULL, 'Physical Education and Sports Science', NULL, NULL, '2022-05-30 13:30:30', '2022-05-30 13:30:30'),
(14, NULL, 'Information and Communication Technology', NULL, NULL, '2022-05-30 13:30:56', '2022-05-30 13:30:56'),
(15, NULL, 'Computer Science and Engineering', NULL, NULL, '2022-05-30 13:31:13', '2022-05-30 13:31:13'),
(16, NULL, 'Electrical and Electronic Engineering', NULL, NULL, '2022-05-30 13:31:31', '2022-05-30 13:31:31'),
(17, NULL, 'Business Administration', NULL, NULL, '2022-05-30 13:32:01', '2022-05-30 13:32:01'),
(18, NULL, 'Agriculture', NULL, NULL, '2022-05-30 13:32:18', '2022-05-30 13:32:18'),
(19, NULL, 'Microbiology', NULL, NULL, '2022-05-30 13:32:31', '2022-05-30 13:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `employeedesignations`
--

CREATE TABLE `employeedesignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeedesignations`
--

INSERT INTO `employeedesignations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DC', '2022-03-09 22:45:24', '2022-03-09 22:45:24'),
(2, 'EN', '2022-05-12 20:47:24', '2022-05-12 20:47:24'),
(3, 'T.N.O', '2022-05-18 19:20:47', '2022-05-18 19:20:47'),
(4, 'D.G.F.I', '2022-05-18 19:21:19', '2022-05-18 19:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE `employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` date NOT NULL,
  `attend_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `employee_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-05-18', 'Leave', '2022-05-18 19:26:05', '2022-05-18 19:26:05'),
(2, 3, '2022-05-18', 'Leave', '2022-05-18 19:26:05', '2022-05-18 19:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `leave_purpose_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `employee_id`, `leave_purpose_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-05-26', '2022-05-26', '2022-05-26 13:28:49', '2022-05-26 13:28:49'),
(2, 2, 2, '2022-05-10', '2022-05-26', '2022-05-26 15:43:02', '2022-05-26 15:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leavetypes`
--

CREATE TABLE `employee_leavetypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_sallary_logs`
--

CREATE TABLE `employee_sallary_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=User_id',
  `previous_salary` int(11) DEFAULT NULL,
  `present_salary` int(11) DEFAULT NULL,
  `increment_salary` int(11) DEFAULT NULL,
  `effected_salary` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_sallary_logs`
--

INSERT INTO `employee_sallary_logs` (`id`, `employee_id`, `previous_salary`, `present_salary`, `increment_salary`, `effected_salary`, `created_at`, `updated_at`) VALUES
(1, 2, 10000, 10000, 0, '2022-05-18', '2022-05-18 19:22:20', '2022-05-18 19:22:20'),
(2, 3, 15000, 15000, 0, '2022-05-16', '2022-05-18 19:23:08', '2022-05-18 19:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `dept_name`, `date`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(5, 'alumni students', 'Department of English', '2022-04-05', '18:07', '19:07', '2022-04-26 03:07:18', '2022-04-26 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Exam A', '2022-02-24 07:09:19', '2022-02-24 07:09:19'),
(4, 'Class Exam', '2022-03-06 11:55:08', '2022-03-06 11:55:08'),
(5, 'Final Exam', '2022-03-11 05:05:51', '2022-03-11 05:05:51'),
(7, 'New Exam', '2022-08-23 12:37:40', '2022-08-23 12:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `expensedetails`
--

CREATE TABLE `expensedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(16,2) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensedetails`
--

INSERT INTO `expensedetails` (`id`, `expid`, `exp_for`, `amount`, `ref`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(8, 'EXP1822057', 'EX_1', 1240.00, '09876543', '1', NULL, NULL, NULL),
(10, 'EXP2322059', 'EX_1', 1000.00, '100', '1', NULL, NULL, NULL),
(11, 'EXP30220810', 'EX_1', 5000.00, 'c', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `amount` double(16,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `voucher_no`, `date`, `amount`, `note`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(8, 'EXP1822057', '2022-05-20', 4567.00, 'good for not', '1', NULL, NULL, NULL),
(10, 'EXP2322059', '2022-05-23', 1100.00, 'Admission Fee', '1', NULL, NULL, NULL),
(11, 'EXP30220810', '2022-08-30', 5000.00, NULL, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`id`, `name`, `description`, `link`, `image`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(13, 'Faculty of Arts and  Sciences', 'The Faculty of Arts and Sciences, the largest division of the University, is dedicated to being\r\nat the forefront of teaching and learning and fostering cutting edge research and discovery.', 'Faculty of Arts and  Sciences', '202208141922Faculty_arts_sciences.jpg', NULL, 'FAR', '2022-08-14 23:22:35', '2022-08-14 23:22:35'),
(14, 'Faculty of Science and Engineering', 'The Faculty of Science and Engineering (FSE) is home to several outstanding departments in education and research. Students and scientists contribute to education programmes at the bachelor\'s, master\'s and PhD levels and take part in innovative research in the fields of science, technology, engineering and mathematics.', 'Faculty of Science and Engineering', '202208141929Faculty of Science and Engineering .jpg', NULL, 'FSE', '2022-08-14 23:29:56', '2022-08-14 23:29:56'),
(15, 'Faculty of Business Studies', 'The Faculty of Business Studies (FBS) (Bengali: ব্যবসায় শিক্ষা অনুষদ) is one of the leading faculties of University of Rabindra Maitree University.', 'Faculty of Business Studies', '202208141937Faculty of Business Studies.jpg', NULL, 'FBS', '2022-08-14 23:37:12', '2022-08-14 23:37:12'),
(16, 'Faculty of Agriculture', 'The Faculty of Agriculture shall run courses in Agriculture such that graduates of the faculty shall be knowledgeable in the main areas of Agricultural Economics and Extension as well as Crop and Animal Production.', 'Faculty of Agriculture', '202208141941Faculty of Agriculture.jpg', NULL, 'FA', '2022-08-14 23:41:37', '2022-08-14 23:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feesmasters`
--

CREATE TABLE `feesmasters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `amount` float(16,2) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `feetype_id` int(11) DEFAULT NULL,
  `feegroup_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `fixed` float(12,2) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feesmasters`
--

INSERT INTO `feesmasters` (`id`, `name`, `batch_id`, `amount`, `description`, `is_active`, `feetype_id`, `feegroup_id`, `class_id`, `department_id`, `percentage`, `fixed`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'C', NULL, 2000.00, 'notjing', NULL, 1, 1, NULL, NULL, NULL, NULL, '2022-04-03', '2022-03-23 12:10:09', '2022-03-23 12:10:09'),
(2, 'Test', NULL, 1000.00, 'No Discount', NULL, 1, 7, NULL, NULL, NULL, NULL, '2022-05-17', '2022-05-14 14:00:34', '2022-05-14 14:00:34'),
(3, 'Abdul Haddy', NULL, 4320.00, 'Description', NULL, 1, 1, NULL, NULL, NULL, NULL, '2022-05-15', '2022-05-15 15:30:41', '2022-05-15 15:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `feestypes`
--

CREATE TABLE `feestypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feestypes`
--

INSERT INTO `feestypes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', '2022-03-11 06:11:54', '2022-03-11 06:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `fees_collections`
--

CREATE TABLE `fees_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `tamount` decimal(16,2) DEFAULT NULL,
  `tdiscount` decimal(16,2) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_collections`
--

INSERT INTO `fees_collections` (`id`, `sid`, `invno`, `date`, `tamount`, `tdiscount`, `note`, `uid`, `created_at`, `updated_at`) VALUES
(9, '1', 'COL232205', '2022-05-23', '20000.00', NULL, 'Admission Fee', 1, NULL, NULL),
(10, '1', 'COL2322059', '2022-05-23', '1000.00', NULL, 'Application Form', 1, NULL, NULL),
(11, '1', 'COL23220510', '2022-05-23', '400.00', NULL, 'ID Card', 1, NULL, NULL),
(12, '1', 'COL23220511', '2022-05-23', '100.00', NULL, 'Scholarship Form', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_collection_details`
--

CREATE TABLE `fees_collection_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees_master` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(16,2) DEFAULT NULL,
  `discount` decimal(16,2) DEFAULT NULL,
  `fees_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_collection_details`
--

INSERT INTO `fees_collection_details` (`id`, `sid`, `invno`, `fees_master`, `amount`, `discount`, `fees_type`, `fees_group`, `fees_discount`, `uid`, `created_at`, `updated_at`) VALUES
(8, '1', 'COL232205', '3', '20000.00', '0.00', NULL, NULL, NULL, 1, NULL, NULL),
(9, '1', 'COL2322059', '2', '1000.00', '0.00', NULL, NULL, NULL, 1, NULL, NULL),
(10, '1', 'COL23220510', '3', '400.00', '0.00', NULL, NULL, NULL, 1, NULL, NULL),
(11, '1', 'COL23220511', '3', '100.00', '0.00', NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_discounts`
--

CREATE TABLE `fees_discounts` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_discounts`
--

INSERT INTO `fees_discounts` (`id`, `session_id`, `name`, `code`, `amount`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Hostel Nam', NULL, '7890', 'Description', '0', '2022-05-12 08:16:06', '2022-05-12 08:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `fees_groups`
--

CREATE TABLE `fees_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_groups`
--

INSERT INTO `fees_groups` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Two Birds, One Phone', 'Computer science:', '2022-07-05 21:05:45', '2022-07-05 21:05:45'),
(9, 'Through Thick and Thin', 'Engineering', '2022-07-05 21:08:39', '2022-07-05 21:08:39'),
(10, 'The Three Amigos', 'Engineering', '2022-07-05 21:09:13', '2022-07-05 21:09:13'),
(11, 'Chamber of Secrets', 'Economics', '2022-07-05 21:09:57', '2022-07-05 21:09:57'),
(12, 'Walkie Talkies', 'History', '2022-07-05 21:10:37', '2022-07-05 21:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `fees_reminders`
--

CREATE TABLE `fees_reminders` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reminder_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_types`
--

CREATE TABLE `fees_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_types`
--

INSERT INTO `fees_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Fees Type Name *', 'Description', '2022-05-12 08:10:56', '2022-05-12 08:10:56'),
(3, 'Exam fee', 'Exam fee', '2022-05-14 13:59:18', '2022-05-14 13:59:18'),
(4, 'Abdul Haddy', 'Description', '2022-05-18 19:14:49', '2022-05-18 19:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admission form fee', '2022-02-03 12:12:40', '2022-02-03 12:12:40'),
(2, 'Admisssion / Registration Fee', '2022-03-05 11:40:14', '2022-04-05 08:12:20'),
(3, 'Students ID Card Fee', '2022-03-05 11:40:37', '2022-04-05 08:11:04'),
(4, 'Others', '2022-03-05 11:41:51', '2022-08-23 12:33:53'),
(17, 'Exam and Lab  Fee', '2022-03-06 11:53:45', '2022-04-05 08:13:15'),
(18, 'Tuition Fee', '2022-03-11 05:04:58', '2022-03-11 05:04:58'),
(20, 'Library Fee', '2022-08-23 12:33:12', '2022-08-23 12:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(2, 2, 5, 10000, '2022-04-05 08:15:45', '2022-04-05 08:15:45'),
(11, 3, 9, 1500, '2022-05-19 12:42:12', '2022-05-19 12:42:12'),
(12, 1, 1, 5000, '2022-08-11 10:40:38', '2022-08-11 10:40:38'),
(13, 1, 14, 5000, '2022-09-03 19:58:54', '2022-09-03 19:58:54'),
(14, 1, 13, 500, '2022-09-03 20:00:32', '2022-09-03 20:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `fincoms`
--

CREATE TABLE `fincoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fincoms`
--

INSERT INTO `fincoms` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Chairman', 'Mr. Sheikh Mostafizur Rahman', 'mostafizurbablu67@gmail.com', 'Deputy Director, Department of Physical Education   \r\nIslamic University, Kushtia', '202205290429Shaikh Mostafizur Rahman.jpg', '2022-05-29 08:29:55', '2022-05-29 08:29:55'),
(6, 'Member', 'Md.Moniruzzaman', 'moniruzzamanmostak5034@gmail.com', 'Physical Instructor\r\n\r\n   Rabindranath Tagore Degree College\r\n   Kumarkhali, Kushtia', '202205290430Moniruzzaman.jpg', '2022-05-29 08:30:47', '2022-05-29 08:30:47'),
(7, 'Member', 'Mr. Md. Fazle Rabbani', 'robbani.mgdc@gmail.com', 'Lecturer,\r\n Mujibnagar Govt. Degree College, Meherpur', '202205290432Fazley Robbani.jpg', '2022-05-29 08:32:21', '2022-05-29 08:32:21'),
(10, 'Member', 'Professor Dr. Mohammad Shahjahan Ali', 'vc@rmu.ac.bd', 'Vice-Chancellor\r\n Rabindra Maitree University', '202205290623shahjahan_ali.png', '2022-05-29 10:23:05', '2022-05-29 10:23:05'),
(11, 'Member', 'Professor Dr.Mohammad Mamoon', 'treasurer@rmu.ac.bd', 'Treasurer \r\nRabindra Maitree University,Kushtia', '202205290625Professor Dr.Mohammad Mamoon.jpg', '2022-05-29 10:25:16', '2022-05-29 10:25:16'),
(12, 'Member', 'Professor Dr. Md. Shahidur Rahman', 'shahidur@rmu.ac.bd', 'Dean, Faculty of Arts and Social Sciences\r\n  Rabindra Maitree University, Kushtia', '202205290627shadiur rahman.jpg', '2022-05-29 10:27:10', '2022-05-29 10:27:10'),
(13, 'Member', 'Professor Dr. Halima Khatun', 'khatundrhalima@yahoo.com', 'Department of Law\r\nIslamic University, Kushtia', '202205290629Halima Khatun.jpg', '2022-05-29 10:29:46', '2022-05-29 10:29:46'),
(14, 'Member', 'Dr.Md.Alamgir Hossain Bhuiya', 'anamit08@gmail.com', 'Treasurer, Islamic University, Kushtia', '202205290644Dr.Md.Alamgir Hossain Bhuiya.jpg', '2022-05-29 10:44:30', '2022-05-29 10:44:30'),
(15, 'Member Secretary', 'Dr. Most. Ismat Ara Khatun', 'registrar@rmu.ac.bd', 'Registrar (In Charge)', '202205290645Dr. Most. Ismat Ara Khatu.jpg', '2022-05-29 10:45:40', '2022-05-29 10:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `type`, `image`, `description`, `link`, `category`, `created_at`, `updated_at`) VALUES
(7, 'Gallery 1', 'All', '202207040431download (1).jpeg', 'good Description', 'https://www.google.com/search?q=university+images+picture&sxsrf=ALiCzsb8u0A0QWR-WbpY_Q6Vuc0U3UFbuw:1655366203288&source=lnms&tbm=isch&sa=X&ved=2ahUKEwihoZTUv7H4AhX2kNgFHRtBCVQQ_AUoAnoECAIQBA&biw=1366&bih=657&dpr=1#imgrc=VfcRv7EeZ-6TuM', NULL, '2022-07-04 08:31:53', '2022-07-04 08:31:53'),
(8, 'Gallery 1', 'All', '202208041859banner2.jpg', 'good', 'http://localhost/schoolnew/about', NULL, '2022-08-04 22:59:34', '2022-08-04 22:59:34'),
(9, 'galary1', 'Classes', '202208041913testimonial-thumb3.jpg', 'new', 'www.accoventory.com', NULL, '2022-08-04 23:13:22', '2022-08-04 23:13:22'),
(10, 'test', 'Event', '202209101825tree-736885__480.jpg', 'aaaaaaaaaaaaaaaa', 'http://rajtrims.com/departmentenglish', NULL, '2022-09-10 22:25:52', '2022-09-10 22:25:52'),
(11, 'gallery3', 'Sports', '202209101933tour8.jpg', 'toour8', 'apply online', NULL, '2022-09-10 23:33:14', '2022-09-10 23:33:14'),
(12, 'gallery4', 'Party', '202209101934tour3.jpg', 'party', 'apply online', NULL, '2022-09-10 23:34:19', '2022-09-10 23:34:19'),
(13, 'Gallery5', 'Contest', '202209101935tour6.jpg', 'tour6', 'apply online', NULL, '2022-09-10 23:35:57', '2022-09-10 23:35:57'),
(14, 'Gallery6', 'Event', '202209101936tour5.jpg', 'tour5', 'apply online', NULL, '2022-09-10 23:36:48', '2022-09-10 23:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_start_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio_attendance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biometric_device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_lang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lan_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_date_format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_start_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sch_currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adm_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adm_no_digit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adm_start_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staffid_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staffid_no_digit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staffid_start_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_me_question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duplicate_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_due_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_admission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_rest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_api_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_primary_color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_secondary_color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_theme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `school_name`, `school_code`, `address`, `school_phone`, `school_email`, `sch_session_id`, `sch_start_month`, `attendance`, `bio_attendance`, `biometric_device`, `sch_lang_id`, `lan_mode`, `sch_date_format`, `sch_timezone`, `sch_start_week`, `sch_currency`, `sch_currency_symbol`, `currency_place`, `admission_no`, `adm_prefix`, `adm_no_digit`, `adm_start_from`, `staff_id`, `staffid_prefix`, `staffid_no_digit`, `staffid_start_from`, `show_me_question`, `duplicate_fee`, `fee_due_days`, `online_admission`, `teacher_rest`, `mobile_api_url`, `app_primary_color_code`, `app_secondary_color_code`, `current_theme`, `created_at`, `updated_at`) VALUES
(1, 'BDR', 'BDR009', '121/A,Bashir uddin road , kalabagan,Dhaka', '01677997957', 'sarowara8@gmail.com', '15', '4', '0', '0', NULL, '4', '0', 'm/d/Y', 'UTC', 'Monday', 'BDT', 'TK', 'before', '0', 'BDRA', '5', '00001', '0', 'BDS', '3', '099', '0', '0', '60', '0', '0', '01677997957', '#424242', '#eeeeee', NULL, '2022-05-24 03:59:19', '2022-05-24 03:59:19'),
(2, 'BDR', 'BDR009', '121/A,Bashir uddin road , kalabagan,Dhaka', '01677997957', 'sarowara8@gmail.com', '15', '4', '0', '0', NULL, '4', '0', 'm/d/Y', 'UTC', 'Monday', 'BDT', 'TK', 'before', '0', 'BDRA', '5', '00001', '0', 'BDS', '3', '099', '0', '0', '60', '0', '0', '01677997957', '#424242', '#eeeeee', NULL, '2022-05-24 04:00:22', '2022-05-24 04:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `hostelrooms`
--

CREATE TABLE `hostelrooms` (
  `id` int(11) NOT NULL,
  `hostel_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_bed` int(11) DEFAULT NULL,
  `cost_per_bed` double(10,2) DEFAULT 0.00,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostelrooms`
--

INSERT INTO `hostelrooms` (`id`, `hostel_name`, `room_type`, `room_no`, `no_of_bed`, `cost_per_bed`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Intel', NULL, NULL, NULL, NULL, '2022-05-13 04:28:39', '2022-05-13 04:28:39'),
(3, 'East', 'Single Bed', '08', 2, 2000.00, NULL, 'Description', '2022-06-09 18:56:17', '2022-06-09 18:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` int(11) NOT NULL,
  `hostel_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intake` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `hostel_name`, `type`, `address`, `intake`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'North', 'Boys', '84-04,170 th street', 'intake', 'Good Phone', 'no', '2022-06-09 18:45:27', '2022-06-09 18:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `room_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_bed` int(11) DEFAULT NULL,
  `cost_per_bed` double(10,2) DEFAULT 0.00,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `improvementexams`
--

CREATE TABLE `improvementexams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_option` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `improvementexams`
--

INSERT INTO `improvementexams` (`id`, `student_id`, `student_name`, `dept_name`, `campus`, `current_sem`, `current_sem_year`, `student_mobile`, `student_email`, `course_name`, `paid_amount`, `paid_date`, `payment_option`, `created_at`, `updated_at`) VALUES
(1, '65', 'Md Anamul Huq', 'BSS(Sociology)', 'City', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'sdfasd@gmail.com', '65', '6', 'Gub Rockect', '2022-06-13 20:01:58', '2022-06-13 20:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `inventorystoreitems`
--

CREATE TABLE `inventorystoreitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_store` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventorystoreitems`
--

INSERT INTO `inventorystoreitems` (`id`, `item_store`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'modern store', 'GOV1', 'most power full store', '2022-05-07 09:05:15', '2022-05-07 09:05:15'),
(2, 'smart store', 'sm110', 'sm110 is the best', '2022-05-07 09:05:55', '2022-05-07 09:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `inventorysuppliers`
--

CREATE TABLE `inventorysuppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventorysuppliers`
--

INSERT INTO `inventorysuppliers` (`id`, `item_supplier`, `phone`, `email`, `address`, `contact_person_name`, `contact_person_phone`, `contact_person_email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'asraful alom', '0178965432', 'alom@gmail.com', 'lalmatia', 'asif', '012458445', 'asif@gamil.com', 'hello everyone how are  you.', '2022-05-07 09:08:08', '2022-05-07 09:08:08'),
(2, 'kamal uddin altaf', '0174565544', 'kamal@gmail.com', 'baisahata matikata dhaka', 'kabir kha', '0144565656', 'kabira@gmail.com', 'mb best success.', '2022-05-07 09:09:40', '2022-05-07 09:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_items`
--

INSERT INTO `inventory_items` (`id`, `name`, `item_category`, `unit`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Book', '2', 'pice', 'Description', '2022-05-07 09:03:16', '2022-05-17 17:15:08'),
(2, 'Pencil', '2', 'piece', '10 pencil', '2022-05-07 09:03:55', '2022-05-07 09:03:55'),
(4, 'taka', '1', 'pice', 'taka', '2022-05-10 21:26:08', '2022-05-10 21:26:08'),
(5, 'Chair Table', '3', 'pice', 'good Description', '2022-05-10 22:07:59', '2022-05-10 22:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_items`
--

CREATE TABLE `inventory_stock_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `symbol` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+',
  `purchase_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_items`
--

CREATE TABLE `issue_items` (
  `id` int(11) NOT NULL,
  `issue_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_to` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `item_category_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_returned` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_returns`
--

CREATE TABLE `issue_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_returns`
--

INSERT INTO `issue_returns` (`id`, `sid`, `invno`, `date`, `rdate`, `status`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '4', 'LB142204', '2022-04-14', '2022-04-20', 'ok', 'ok', '1', NULL, NULL),
(5, '5', 'LB1122054', '2022-09-09', '2022-09-09', 'Note', 'Note', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issue_return_details`
--

CREATE TABLE `issue_return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redate` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_return_details`
--

INSERT INTO `issue_return_details` (`id`, `sid`, `invno`, `book_id`, `qty`, `redate`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 'LB142204', '1', NULL, '2022-04-20', '1', NULL, NULL),
(2, '5', 'LB1122054', '1', NULL, '2022-09-09', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` int(11) NOT NULL,
  `item_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `item_category`, `is_active`, `description`, `created_at`, `updated_at`) VALUES
(1, 'taka', 'yes', 'daily taka', '2022-05-10 20:44:38', '2022-05-10'),
(2, 'Item Category', 'yes', 'Item Category', '2022-05-10 21:00:14', '2022-05-10'),
(3, 'Category', 'yes', 'Description', '2022-05-19 09:44:04', '2022-05-19'),
(4, 'Pencil', 'yes', 'Description', '2022-05-16 18:46:27', '2022-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `item_stores`
--

CREATE TABLE `item_stores` (
  `id` int(11) NOT NULL,
  `item_store` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_suppliers`
--

CREATE TABLE `item_suppliers` (
  `id` int(11) NOT NULL,
  `item_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_purposes`
--

CREATE TABLE `leave_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_purposes`
--

INSERT INTO `leave_purposes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Haddy', '2022-05-26 13:28:49', '2022-05-26 13:28:49'),
(2, 'Abdulla Al Mamun', '2022-05-26 15:43:02', '2022-05-26 15:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `librarystudents`
--

CREATE TABLE `librarystudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `library_no` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_grades`
--

CREATE TABLE `marks_grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks_grades`
--

INSERT INTO `marks_grades` (`id`, `grade_name`, `grade_point`, `start_marks`, `end_marks`, `start_point`, `end_point`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'A', '4', '70', '80', '1.5', '5', 'Good', '2022-08-15 15:07:48', '2022-08-15 15:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_11_23_192918_create_sessions_table', 1),
(7, '2020_11_27_191622_create_student_classes_table', 1),
(8, '2020_11_27_201955_create_student_years_table', 1),
(9, '2020_11_27_205317_create_student_groups_table', 1),
(10, '2020_11_27_212648_create_student_shifts_table', 1),
(11, '2020_11_28_184513_create_fee_categories_table', 1),
(12, '2020_11_28_193421_create_fee_category_amounts_table', 1),
(13, '2020_11_29_190907_create_exam_types_table', 1),
(14, '2020_11_29_193820_create_school_subjects_table', 1),
(15, '2020_11_30_192807_create_assign_subjects_table', 1),
(16, '2020_11_30_211919_create_designations_table', 1),
(17, '2020_12_02_191137_create_assign_students_table', 1),
(18, '2020_12_02_191735_create_discount_students_table', 1),
(19, '2020_12_09_192120_create_employee_sallary_logs_table', 1),
(20, '2020_12_11_205416_create_leave_purposes_table', 1),
(21, '2020_12_11_210033_create_employee_leaves_table', 1),
(22, '2020_12_13_192045_create_employee_attendances_table', 1),
(23, '2020_12_15_214223_create_student_marks_table', 1),
(24, '2020_12_16_202402_create_marks_grades_table', 1),
(25, '2020_12_18_191232_create_account_student_fees_table', 1),
(26, '2020_12_18_212912_create_account_employee_salaries_table', 1),
(27, '2020_12_20_192742_create_account_other_costs_table', 1),
(28, '2021_12_10_133645_create_account_groups_table', 1),
(29, '2021_12_13_040741_create_studentbasicinfos_table', 1),
(30, '2021_12_13_041214_create_studentsscinfos_table', 1),
(31, '2021_12_13_042841_create_studenthscinfos_table', 1),
(32, '2021_12_13_043614_create_studentdiplomainfos_table', 1),
(33, '2021_12_13_044154_create_studentbscinfos_table', 1),
(34, '2021_12_13_044731_create_studentmscinfos_table', 1),
(35, '2022_01_05_102936_create_departments_table', 1),
(36, '2022_01_05_103006_create_programs_table', 1),
(37, '2022_01_05_105729_create_facultys_table', 1),
(38, '2022_01_18_104833_create_websiteinfos_table', 1),
(39, '2022_01_22_094456_create_noticeboards_table', 2),
(40, '2022_01_26_181332_create_sliders_table', 3),
(41, '2022_01_28_123132_create_galleries_table', 4),
(42, '2022_02_25_041028_create_studnet_table', 5),
(43, '2022_02_25_074657_create_students_table', 6),
(44, '2022_03_26_082705_create_fees_collections_table', 7),
(45, '2022_03_26_083218_create_fees_collection_details_table', 8),
(46, '2022_06_22_120540_create_socialgroups_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mobileaccounts`
--

CREATE TABLE `mobileaccounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doposit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `widrawn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobileaccounts`
--

INSERT INTO `mobileaccounts` (`id`, `mname`, `bname`, `mobile`, `doposit`, `widrawn`, `balance`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(1, 'bkash', NULL, '01705645150', NULL, NULL, NULL, NULL, NULL, '2022-05-13 21:42:11', '2022-05-13 21:42:11'),
(2, 'Kulsum khatun', NULL, '01765005822', NULL, NULL, NULL, NULL, NULL, '2022-05-15 15:21:38', '2022-05-15 15:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsevents`
--

INSERT INTO `newsevents` (`id`, `title`, `description`, `image`, `file`, `uid`, `created_at`, `updated_at`) VALUES
(13, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '202206221834adminbrand.PNG', NULL, NULL, '2022-06-22 12:34:39', '2022-06-22 12:34:39'),
(14, 'Title', 'Description *', '202207040429pexels-photo-1133957 (1).webp', '2022070404293d-wallpaper-design-waterfall-sea-260nw-1380925703.webp', NULL, '2022-07-04 08:29:16', '2022-07-04 08:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboards`
--

CREATE TABLE `noticeboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticeboards`
--

INSERT INTO `noticeboards` (`id`, `title`, `description`, `image`, `file`, `uid`, `created_at`, `updated_at`) VALUES
(7, 'Teachers', 'Description', '202205181601earth-crystal-glass-globe-ball-260nw-1500154991.webp', '202205181601240_F_319206040_oxJp4C02Q4ahOyf1d92kbUoHKigr3dLh.jpg', NULL, '2022-05-18 20:01:24', '2022-05-18 20:01:24'),
(8, 'Teacher', 'এই বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগ/অনুষদ/হল/দপ্তরে নিম্নবর্ণিত শূন্যপদসমূহ (৩য় শ্রেণী) পূরণের জন্য বাংলাদেশী নাগরিকদের নিকট হতে নির্ধারিত ফরমে দরখাস্ত আহ্বান করা যাচ্ছে', '202205190408240_F_319206040_oxJp4C02Q4ahOyf1d92kbUoHKigr3dLh.jpg', '2022051904083d-wallpaper-design-waterfall-sea-260nw-1380925703.webp', NULL, '2022-05-19 08:08:34', '2022-05-19 08:08:34'),
(9, 'Admission Notice MPED', 'Admission Notice MPED', '202206111023Notice_MPEd.pdf', '202206111023Notice_MPEd.pdf', NULL, '2022-06-11 14:23:50', '2022-06-11 14:23:50'),
(10, 'Establishment anniversary', 'Establishment anniversary', '202206111036Nitice_10-05-2022.pdf', '202206111036Nitice_10-05-2022.pdf', NULL, '2022-06-11 14:36:16', '2022-06-11 14:36:16'),
(11, 'teachers', '20/7/2022   university is open', '202207170420download.jfif', '202207170420download (1).jfif', NULL, '2022-07-17 08:20:33', '2022-07-17 08:20:33'),
(12, 'Students', '20/7/2022 university is open', '202207170455download.jfif', '202207170455download (1).jfif', NULL, '2022-07-17 08:55:53', '2022-07-17 08:55:53'),
(13, 'Payment Notice for Final Examination- Summer Semester 2022', 'good', '202208161107environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg', '202208161107environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg', NULL, '2022-08-16 15:07:27', '2022-08-16 15:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`, `sid`) VALUES
(1, 'Mohammad Anamul Huq ', 'anamit08@gmail.com', '01712510054', 5000, '', 'Processing', '62f4bf5a0bebc', 'BDT', '220811006'),
(2, 'Mohammad Anamul Huq ', 'anamit08@gmail.com', '01712510033', 10, '', 'Pending', '631375b455641', 'BDT', '220903008'),
(3, 'Mohammad Anamul Huq ', 'anamit08@gmail.com', '01712510033', 500, '', 'Processing', '63137b53ba4fc', 'BDT', '220903009'),
(4, 'Azad ansari ', 'anamit08@gmail.com', '01712510066', 500, '', 'Processing', '63185e7902348', 'BDT', '2209070010'),
(5, 'faisal ahmed ', 'abcd@gmail.com', '01711223344', 500, '', 'Processing', '631ecab8dc0c7', 'BDT', '2209120011');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonecalllogs`
--

CREATE TABLE `phonecalllogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_follow_up_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_duration` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phonecalllogs`
--

INSERT INTO `phonecalllogs` (`id`, `name`, `Phone`, `date`, `description`, `next_follow_up_date`, `call_duration`, `note`, `call_type`, `created_at`, `updated_at`) VALUES
(1, 'ABRAR JIMI', '01712510054', '2022-06-01', 'Good bed', '2022-06-12', '2.30', 'Note', 'Incoming', '2022-06-12 09:27:15', '2022-06-12 09:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `printheaders`
--

CREATE TABLE `printheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printheaders`
--

INSERT INTO `printheaders` (`id`, `header_image`, `message1`, `created_at`, `updated_at`) VALUES
(1, 'public/admin/systemHeader-images/1653467827687.jpeg', 'asdfasdf/l\r\n\r\nasfkj;ao    This receipt is computer generated hence no signature is required.', '2022-05-25 02:37:07', '2022-05-25 02:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `fid`, `did`, `name`, `description`, `link`, `image`, `uid`, `code`, `created_at`, `updated_at`) VALUES
(16, 13, 22, 'Bachelor of Arts with Honors in Bangla', 'Bachelor of Arts with Honors in Bangla', 'apply online', '202209121132Bangla_department.jpg', NULL, NULL, '2022-09-12 15:32:28', '2022-09-12 15:32:28'),
(17, 13, 21, 'Bachelor of Arts with Honors in English', 'Bachelor of Arts with Honors in English', 'Bachelor of Arts with Honors in English', NULL, NULL, NULL, '2022-09-12 15:33:37', '2022-09-12 15:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `registerslips`
--

CREATE TABLE `registerslips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registerslips`
--

INSERT INTO `registerslips` (`id`, `student_id`, `dept`, `student_name`, `student_email`, `student_mobile`, `created_at`, `updated_at`) VALUES
(1, '65', 'MBA(Regular)', 'S.M Sarowar', 'sarowara8@gmail.com', '01677997957', '2022-07-02 05:55:41', '2022-07-02 05:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `room_type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `room_type`, `description`, `created_at`, `updated_at`) VALUES
(2, 'single room', 'Good bed', '2022-06-09 22:09:07', '2022-06-09 22:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `description`, `added_by`, `created_at`, `updated_at`) VALUES
(2, 'Abdul Haddy', 'Description', NULL, '2022-05-18 19:57:45', '2022-05-18 19:57:45'),
(3, 'Section', 'bangla', NULL, '2022-07-04 07:05:05', '2022-07-04 07:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('06Al8JfUda0hMjfJM2fJF2bYgkJNlTrxZFM2Vuk5', NULL, '205.210.31.3', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2NVSVFCc2FqdUtVOTYyVGJ3TXNsUXQ5bHlQOHVnbXB1TERFQ01MMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vcmFqdHJpbXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662966954),
('0kSENF51yJYAiaSM95O3NiNSBtS1dJV976V4W9JP', NULL, '37.139.53.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4099.2 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3V2RU5OTDVnbUt0YXRJR080aEVORjBOdFhQU3BUcmhVSDdObUtRTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9yYWp0cmltcy5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662984176),
('13SSiGDtgzPXNBRXUg1N4MCzi9UYqN6T9Za4zIep', NULL, '51.222.253.3', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUI5SU1MdUpkZmFKeVJQYkptdHZxZ1hJY05TOUNhODFkU1ltUFgwbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly93d3cucmFqdHJpbXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662967540),
('5TCeEBLIsfvJAZh1RQt8W5FwkhefsybWevFAjpQ5', NULL, '103.187.24.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibXV0RlM3ZWZ3UHcwdk1GNG43VXJSSzBEeVJXaE45MllSTFBkaTl5MSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662962404),
('5yPd63WElFVNr353PNnvtRaFfXmRD5WhqxFOnBA6', NULL, '51.222.253.7', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickdPZERoTnRtbUxuR1VYQW5jbVVlc0J0a214RFRaNWNpSlQ2Y3FHdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LnJhanRyaW1zLmNvbS9kZXBhcnRtZW50ZGV0YWlscy8yNSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662973192),
('7y2z24atMASuKq0Am9CbW03sUXbvf2CHIbQUqgol', NULL, '51.222.253.10', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWxWVnJUNk82SWFRSWFDaGljdlBWaGJuN2RVbDZuY3FCbnpBUVVwaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vcmFqdHJpbXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662965487),
('9h2WwlrJbZiLcTX9m4YNmsbhKwxqI6xv2SwdaMtI', NULL, '103.187.24.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOG9VUkxEbUNqRUtJSEVCa3JXelNuZ0cxbmpDeEhFckIzUkdxTWJNYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly9yYWp0cmltcy5jb20iO319', 1662964634),
('9rK9i68iRamfpXPyNZt4Hm4eIQbppHLNzNJJWQIL', NULL, '66.249.68.21', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2lOekI2eHdWYUlpQ3JDRFRIRElWM3hES3FxaVk0RFhZamhQcE1JcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9yYWp0cmltcy5jb20vYXBwbHlhZGRtaXNzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662982521),
('AzQFz3gfPmUgdAVDaw8bZNsJttlW4DA4mx7GMRCO', NULL, '103.187.24.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmY1U25GOENlSzJPbEI3RDJ2ZVRienJRdzBoOENiZWtwUU04bGFDQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9yYWp0cmltcy5jb20vYXBwbHlhZGRtaXNzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662962363),
('cjRNsy2u6oret2B96T3jQ5VbawYnVbriTw0UQxKj', NULL, '51.222.253.16', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTY1ZlJOM3V3ZTl6MG9VVllIcjZBcVZrSGFDOEZZMGZ6RFhTQlZJciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly93d3cucmFqdHJpbXMuY29tL2RlcGFydG1lbnRkZXRhaWxzLzI0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662969734),
('EquMcpB2Erl5tXviUeDS7pOYXEbcaN6EQkrEHcxi', NULL, '51.222.253.11', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDRyVU5rR1VWTlZEU0xQTEhYOHlFYTJXUVU2QzI5dXhLR3FLZ1ZrVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LnJhanRyaW1zLmNvbS9kZXBhcnRtZW50ZGV0YWlscy8yNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662975670),
('Hj8NfoeiUJII6DF5UbinsWQhmdnVvbhn3aiS5d2h', NULL, '51.222.253.13', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUZFZHl6WUlQS1Ztb2dXMU9YbmZGTXo1Q3pKNFNMa2kxM1JFakdVSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9yYWp0cmltcy5jb20vcHJvZmlsZV92aWV3L2FwcGx5JTIwb25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662982753),
('irrT2429VfRz0I1QIV4InW1J4QIO9mMYgb7xLuRs', NULL, '213.202.228.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMlJVSkZTOVRVdloyd0d3Qmc4UnEyRHN5MlpMcFB3c1lBbUwzVUhqTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662977124),
('jbuYGwVA5t7HrWEjLxFvz35gce7McVolCu9ncUhe', NULL, '51.222.253.14', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUZuVjZOZWRWWmhtd0Q5M2NJWGxtdHp6SDJiOVlidGRJU3ZSNUNKNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly93d3cucmFqdHJpbXMuY29tL2RlcGFydG1lbnRkZXRhaWxzLzI2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662974400),
('Jqmt5PjAf53lSGz7ptzzGQtF4AYTXZh4eR8TFk1p', NULL, '51.222.253.16', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0pzWkI0cnRMSVdLNkZnUGhJVk5JNjc4MEZFQ2FtRmc3TnRRUk1rMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LnJhanRyaW1zLmNvbS9kZXBhcnRtZW50ZGV0YWlscy8yNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662970848),
('KaNJljCDXCkb4Q76mAC4uGYpkHwMbXpPTVUHuNlI', NULL, '51.222.253.1', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFVzZWlFdlBKTTdJcEc1ZDNKUWVudFVSbVJtNWtNZnRQNWJlVDF4biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly93d3cucmFqdHJpbXMuY29tL2RlcGFydG1lbnRkZXRhaWxzLzI1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662972054),
('M0beJN2Bc27eBva9giys5dujOFngYjxveeFIWL6M', NULL, '37.139.53.84', 'Mozilla/5.0 (Windows NT 6.3; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUMwd2VEdkdWWFRDcDd6Z1k4cHBnaUpwQWhZdmpvaHA5amJVRHVWMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9yYWp0cmltcy5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662966761),
('MFwrNFKuDw0q9cgX6McntNrM6QFpNHfh7osT09XR', NULL, '157.55.39.70', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTJMYTNGY051U1RvMVlwaUQ4eGFkbDlCQkJ0VzB5UnA4c1lJZkl2MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9yYWp0cmltcy5jb20vdmlldy81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662966579),
('nheX9iCVaqhrOQUYm7NSiqPlTU4Yuotv01vnIwa6', NULL, '51.222.253.8', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXdDcFJZY1p0MHhOTmdQSzE1OEhXNmpNWVdoZlA0YklYWm5uU29ycSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vcmFqdHJpbXMuY29tL3ZpZXcvd3d3LmFjY292ZW50b3J5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662978210),
('nI8o6IBUB7epDa8cHxp2Uomss7LbsJWH7PWCKRFF', NULL, '37.139.53.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.34 Safari/537.36 Edg/83.0.478.25', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielg0Y0xnME93emxxa0hzTlhpWDl0S1FPT0VRU3BsOTRpcExWRUY4OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9yYWp0cmltcy5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662975316),
('OTJZFUDCU90V585Eoxi7CAN3QOJreqmxcObOIFnJ', NULL, '66.249.68.17', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWcweHBHT1FrMTNkZ29zempheGtzeW1EMVh5akhZaU5Tb3hjU1NTUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9yYWp0cmltcy5jb20vYXBwbHlhZGRtaXNzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662982520),
('OxmSXfd7aN2oZomnvzMrzx0oSCseSmexY6HNKKmh', NULL, '51.222.253.2', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzU1Skl2UElsU2xFMkFiRHR5aHFaMVpiUGtoUWdyNUxoSXFzZFNsdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcmFqdHJpbXMuY29tL2FsbGNvdXJzZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662977043),
('RjO6KfHBux9Xech7AA0WhtEboPXIfeXBthNwJGu0', NULL, '40.77.167.40', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3U5anV6RjBJYTQ5RVdpeWR2TEpOTEpoR2RreXhKaEh6cFVESnB1TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vcmFqdHJpbXMuY29tL21pY3JvYmlvbG9neSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662966141),
('Tfzm0TB3p4FkzYv1XhM9dQK8R7xCnDkAhSmIxpQw', NULL, '103.205.69.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1pMV0wwTklRUm9MdHZlZ3dEYkphUWowR2s2N2FtWWxBSlBYaTVmciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9yYWp0cmltcy5jb20vYXBwbHlhZGRtaXNzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662970958),
('tLBYMK7kFnh6Rs2ErcstVaLVE50KTlTw01yjmIgf', NULL, '103.107.228.202', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDBmUW9ZeVU0dTNFSGdMZUhHWTBCcTlyWFhXbERDblkwb0FidlB4SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9yYWp0cmltcy5jb20vZGVwYXJ0bWVudGVuZ2xpc2giO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1662982580),
('vpViUnCzjrrULuSJ38H1hopsU1k3ulQFlXiRQCiV', 1, '103.205.69.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoianNQM2pDUHJzZElSR09QZG1kMTV6YjhDeWVNRXFXdU9adnVkR29yRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDBtV09jbFBPbDRheUVMcVFLUENQWi4za1B1M1cvZkVtWXZraHF4cVVGQzFIVGRwT0p6WTJhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQwbVdPY2xQT2w0YXlFTHFRS1BDUFouM2tQdTNXL2ZFbVl2a2hxeHFVRkMxSFRkcE9KelkyYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly9yYWp0cmltcy5jb20iO319', 1662982426),
('Xs2MysxSXnseIiYzptBjXuM2xpsjlXF7zX8BSKkv', NULL, '51.222.253.10', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmhBRjUzNktjMlB3UWVPMVRmdUxmdEpUTUFlcU84am9YVXlsNVFiTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LnJhanRyaW1zLmNvbS9kZXBhcnRtZW50ZGV0YWlscy8yMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662964131),
('zhkc1dSGeOj4iFUTRGzb9oBZEI9nr7rh9HenYo1f', NULL, '51.222.253.11', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzRiZnFBNHd4cjlqNGZOQWsxNmEzS3cxYTc2S1h4Wk5SNXpZRHhsUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly93d3cucmFqdHJpbXMuY29tL2RlcGFydG1lbnRkZXRhaWxzLzIzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662961398);

-- --------------------------------------------------------

--
-- Table structure for table `sessionsettings`
--

CREATE TABLE `sessionsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setup_front_offices`
--

CREATE TABLE `setup_front_offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `description`, `link`, `created_at`, `updated_at`) VALUES
(6, 'BEST FOR EDUCATION', '202205270512banner1.jpg', 'we are good for education', 'http://localhost/rmu_university/', '2022-01-27 07:16:12', '2022-05-27 09:12:07'),
(7, 'slider3', '202201271317banner3.jpg', 'Better education we provide', 'http://localhost/rmu_university/', '2022-01-27 07:17:13', '2022-01-27 07:17:13'),
(12, 'Bengali New Year (Pôhela Boishakh) Festivity', '202206190453rmu2019-07-11-04-11-35569362.jpg', 'Bengali New Year', 'http://rmu.ac.bd/commodities/rmu2019-07-11-04-11-35569362.jpg', '2022-06-19 08:53:36', '2022-06-19 08:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `socialgroups`
--

CREATE TABLE `socialgroups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialgroups`
--

INSERT INTO `socialgroups` (`id`, `name`, `type`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'Facebook', 'https://www.facebook.com/', '2022-06-25 12:31:48', '2022-06-25 12:31:48'),
(2, 'Youtube', 'Youtube', 'https://www.youtube.com/watch?v=sMqxrdqKsTY&ab_channel=SugarDiaries', '2022-06-25 12:32:21', '2022-06-25 12:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `studentadmit_cards`
--

CREATE TABLE `studentadmit_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentadmit_cards`
--

INSERT INTO `studentadmit_cards` (`id`, `student_id`, `st_department`, `student_name`, `student_email`, `student_mobile`, `created_at`, `updated_at`) VALUES
(1, 'asd', NULL, 'asdf', 'anam@gmail.com', '01677997957', '2022-06-05 20:08:05', '2022-06-05 20:08:05'),
(2, 'asd', NULL, 'asdf', 'kawser08@gmail.com', '01677997957', '2022-06-05 20:08:58', '2022-06-05 20:08:58'),
(3, '65', 'JMC', 'S.M Sarowar', 'rahman0@diu.edu.bd', '01677997957', '2022-07-02 05:42:40', '2022-07-02 05:42:40'),
(4, '123456', 'EEE', 'Md Shariful Islam', 'med@gmail.com', '01711223344', '2022-09-12 10:29:46', '2022-09-12 10:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendancedetails`
--

CREATE TABLE `studentattendancedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attend_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentattendancedetails`
--

INSERT INTO `studentattendancedetails` (`id`, `attend_id`, `roll`, `sid`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ATN0922037', '20220003', '3', 'Md Anamul HUq', '1', NULL, NULL),
(2, 'ATN1222051', '20150002', '2', 'akij', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentattendances`
--

CREATE TABLE `studentattendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attend_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentattendances`
--

INSERT INTO `studentattendances` (`id`, `attend_id`, `dept_id`, `year_id`, `semester_id`, `shift_id`, `class_id`, `batch_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'ATN0922037', '4', '1', NULL, NULL, NULL, '1', '2022-03-09', NULL, NULL),
(2, 'ATN1222051', '4', '1', NULL, NULL, NULL, '1', '2022-05-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentbasicinfos`
--

CREATE TABLE `studentbasicinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicantion_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgurdian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgurdian_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bloodgroup` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_road` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_post_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_road` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_post_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscpassyear` int(15) DEFAULT NULL,
  `sscroll` int(20) DEFAULT NULL,
  `sscregno` int(20) DEFAULT NULL,
  `sscgrade` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscboard` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscpassyear` int(20) DEFAULT NULL,
  `hscroll` int(20) DEFAULT NULL,
  `hscregno` int(20) DEFAULT NULL,
  `hscgrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscboard` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_degree_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_degree_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_degree_result` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_degree_roll` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_degree_passyear` int(20) DEFAULT NULL,
  `masters_degree_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_degree_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_degree_result` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_degree_roll` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_degree_passyear` int(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentbasicinfos`
--

INSERT INTO `studentbasicinfos` (`id`, `sid`, `program`, `reference`, `firstname`, `lastname`, `phone`, `email`, `semester`, `email_verified_at`, `gender`, `applicantion_for`, `degree`, `campus`, `fname`, `fmobile`, `mname`, `mmobile`, `lgurdian`, `lgurdian_mobile`, `dob`, `bloodgroup`, `usertype`, `password`, `image`, `pre_house`, `pre_road`, `pre_post_office`, `pre_police_station`, `pre_district`, `per_house`, `per_road`, `per_post_office`, `per_police_station`, `per_district`, `sscpassyear`, `sscroll`, `sscregno`, `sscgrade`, `sscboard`, `hscpassyear`, `hscroll`, `hscregno`, `hscgrade`, `hscboard`, `bachelor_degree_name`, `bachelor_degree_institute`, `bachelor_degree_result`, `bachelor_degree_roll`, `bachelor_degree_passyear`, `masters_degree_name`, `masters_degree_institute`, `masters_degree_result`, `masters_degree_roll`, `masters_degree_passyear`, `status`, `created_at`, `updated_at`) VALUES
(1, '22040800', '1', 'None', NULL, NULL, '01705645150', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'City', 'a', '01705645150', 'a', 'a', 'a', '01705645150', '2022-04-09', 'A+', 'Student', '$2y$10$cVsOKlS9E6z3/ilBdintUuwWHfOvxjABJISmUgPZwfyuRprA1gEfi', NULL, 'a', 'a', 'a', 'a', 'DHAKA', 'a', 'a', 'a', 'a', 'DHAKA', 2022, 22222, 22222, 'A', 'Dhaka', 2222, 22222222, 2222222, 'A', 'Dhaka', 'a', 'a', 'a', '22222222', 2022, NULL, NULL, NULL, NULL, NULL, 4, '2022-04-08 14:38:30', '2022-04-11 01:49:19'),
(2, '220408001', '1', 'None', 'a', NULL, '01705645150', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'City', 'a', '01705645150', 'a', 'a', 'a', '01705645150', '2022-04-09', 'A+', 'Student', '$2y$10$bXY0erE4XtaDDfeqdTamkuhvSNCkHtsbDghQUqJzflffiC9iCvFEG', NULL, 'a', 'a', 'a', 'a', 'DHAKA', 'a', 'a', 'a', 'a', 'DHAKA', 2022, 22222, 22222, 'A', 'Dhaka', 2222, 22222222, 2222222, 'A', 'Dhaka', 'a', 'a', 'a', '22222222', 2022, NULL, NULL, NULL, NULL, NULL, 3, '2022-04-08 14:40:33', '2022-04-13 08:15:42'),
(3, '220516002', '1', 'None', 'oliullah', NULL, '01705645150', 'oliullah1565@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'City', 'a', '01705645150', 'a', 'a', 'a', '01705645150', '2022-05-16', 'A+', 'Student', '$2y$10$AsaP3E3Iwt6uub2wx778CeFHGMBbySIVZTxyEW2dNWfBXZULl/yx.', NULL, 'a', 'a', 'a', 'a', 'DHAKA', 'a', 'a', 'a', 'a', 'DHAKA', 2022, 22222, 22222, 'A', 'Dhaka', 2222, 22222222, 2222222, 'A', 'Dhaka', 'a', 'a', '5', '22222222', 2022, 'a', 'a', '5', '54356', 2022, 4, '2022-05-16 20:39:50', '2022-05-16 21:02:51'),
(4, '220809003', '1', 'None', 'Tanvir islam rifat', NULL, '01712510054', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Summer (May-Aug)', 'master', 'City', 'Abdul halim mia', '012345691', 'Kulsum khatun', '54456562345', 'Abdul hailm mia', '0122322312', '2022-08-01', 'A+', 'Student', '$2y$10$hE9d/sO/T4unZcerTSEWm.iYK7z6ZbWzvezQSxx12bz6xlvUeF3ke', NULL, 'Rajbari', 'hospital road', 'Rajbari', 'Rajbari', 'DHAKA', 'Rajbari', 'hospital road', 'Rajbari', 'Rajbari', 'DHAKA', 2020, 76543432, 9843355, '4.33', 'Dhaka', 2020, 76543432, 9843355, '4.33', 'Dhaka', 'Bachelor Degree', 'INSTITUTION', '12', '76543432', 2020, 'Master\'s Degree', 'INSTITUTION', '13', '43432', 2022, NULL, '2022-08-09 21:11:32', '2022-08-09 21:11:32'),
(5, '220811004', '1', 'None', 'Abdul Haddy', NULL, '01712510054', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'master', 'City', 'Father Name', '12345678901', 'Mother Name', '54456562345', 'Abdul hailm mia', 'anamit08@gmail.com', '2022-08-01', 'AB+', 'Student', '$2y$10$VVEmMLy1Qvc4e1yW4MEk6etpCeVhgYOulshv9vAHjeXijk1nL69VG', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'Bosila', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'Bosila', 'DHAKA', 2016, 76543432, 9843355, '3.56', 'Dhaka', 56453423, 3432543, 98765432, '4.33', 'Dhaka', 'Bachelor Degree', 'INSTITUTION', '12', '76543432', 2020, 'Master\'s Degree', 'INSTITUTION', '15', '43432', 2022, NULL, '2022-08-11 10:57:26', '2022-08-11 10:57:26'),
(6, '220811005', '1', 'None', 'Mohammad Anamul Huq', NULL, '01712510054', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'City', 'ffugihiugtgu', '01712510054', 'Mother', '01712510054', 'Anamul', '0215256445', '2022-08-03', 'AB-', 'Student', '$2y$10$iO/r4qsmrfcLaih9WQxo9egLR5dXnJFJ8xZZjHpQUyZVVbD6XVehi', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'Thana', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'Thana', 'DHAKA', 2015, 85255, 12345696, '3.22', 'Dhaka', 2016, 26523, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 11:04:56', '2022-08-11 11:04:56'),
(7, '220811006', '1', 'GUB Teacher', 'Mohammad Anamul Huq', NULL, '01712510054', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'City', 'ffugihiugtgu', '01712510054', 'Mother', '01712510054', 'Anamul', '0215256445', '2022-05-03', 'AB-', 'Student', '$2y$10$VS/snjiNzRG0cKMfGzma2e1HI3j2NlRA56AxiKtD82wRuZldWjIBm', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'Thana', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'Thana', 'DHAKA', 2015, 85255, 12345696, '3.22', 'Dhaka', 2016, 26523, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 12:27:46', '2022-08-11 12:27:46'),
(8, '220903007', '13', 'None', 'Mohammad Anamul Huq', NULL, '01712510033', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'Permanent', 'Abdul Basir', '01712510054', 'khodeha', '01712510099', 'kazi basar', '0178996666', '2022-09-03', 'A+', 'Student', '$2y$10$w4GorsgVIAhmCmLPeUL/8uu10ASyKVEysRciBD5a0ecZ5VRtiC2DO', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'keranigang', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'keranigonj', 'DHAKA', 2020, 8525522, 12345696, '3.22', 'Dhaka', 2022, 2652366, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-03 19:36:57', '2022-09-03 19:36:57'),
(9, '220903008', '13', 'None', 'Mohammad Anamul Huq', NULL, '01712510033', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'Permanent', 'Abdul Basir', '01712510054', 'khodeha', '01712510099', 'kazi basar', '0178996666', '2022-09-03', 'A+', 'Student', '$2y$10$.zvIv09RUL7/WJAyBbJ43.F7ml0/qj80CLQWE4cV6BsbeIRooN7A2', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'keranigang', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'keranigonj', 'DHAKA', 2020, 8525522, 12345696, '3.22', 'Dhaka', 2022, 2652366, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-03 19:38:48', '2022-09-03 19:38:48'),
(10, '220903009', '13', 'None', 'Mohammad Anamul Huq', NULL, '01712510033', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'Permanent', 'Abdul Basir', '01712510054', 'khodeha', '01712510099', 'kazi basar', '0178996666', '2022-09-03', 'A+', 'Student', '$2y$10$ES9kmGuOcipcpu1Ys7kee.mYEjLox2Hcyq6yJoin7quB8f6vAFkKq', NULL, 'Bosila', 'Bosila Road', 'Bosila', 'keranigang', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'keranigonj', 'DHAKA', 2020, 8525522, 12345696, '3.22', 'Dhaka', 2022, 2652366, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-03 20:05:05', '2022-09-03 20:05:05'),
(11, '2209070010', '13', 'GUB Teacher', 'Azad ansari', NULL, '01712510066', 'anamit08@gmail.com', NULL, NULL, 'Male', 'Spring (Jan-Apr)', 'bachelor', 'Permanent', 'Mozid bissas', '01712510099', 'kobita sultana', '01712510033', 'kazi basar', '01712510022', '2022-09-07', 'A+', 'Student', '$2y$10$aixOx50LDCSOEnxp8VygLOkf02DqlR9nCf9cffanP409FzPos8equ', NULL, 'Lalmatia', '5/12 ,Block -F', 'Mohammadpur', 'Mohammmadpur', 'DHAKA', 'Bosila', 'Bosila Road', 'Bosila', 'keranigonj', 'DHAKA', 2020, 8525522, 12345696, '4.22', 'Dhaka', 2022, 2652366, 78465985, '4.55', 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 13:03:05', '2022-09-07 13:03:05'),
(12, '2209120011', '13', 'None', 'faisal ahmed', NULL, '01711223344', 'abcd@gmail.com', NULL, NULL, 'Male', NULL, 'bachelor', 'City', 'EH Haque', '01811223344', 'mst aaa', '01814223355', 'toree', '01711223344', '2001-01-01', 'AB+', 'Student', '$2y$10$bYPJb53YJjfQVWIx5qz17.uHml3RcEVtG01HExQkrXPlvagdUybTG', NULL, '11', 'housing', 'kushtia', 'kushtia', 'KUSHTIA', 'vip road', 'paltan', 'dhaka', 'paltan', 'DHAKA', 2010, 123456, 12345678, 'A', 'Dhaka', 2012, 654321, 87654321, 'B', 'Jessore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 09:52:12', '2022-09-12 09:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `studentbscinfos`
--

CREATE TABLE `studentbscinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrdegreetitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrconcentration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrcgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrscale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrlettergrade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrpassingyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bclrduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentbscinfos`
--

INSERT INTO `studentbscinfos` (`id`, `sid`, `bclrdegreetitle`, `bclrconcentration`, `bclrinstitutename`, `bclrcgpa`, `bclrscale`, `bclrlettergrade`, `bclrroll`, `bclrpassingyear`, `bclrduration`, `created_at`, `updated_at`) VALUES
(1, '22020300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:25', '2022-02-03 10:52:25'),
(2, '220203001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:51', '2022-02-03 10:52:51'),
(3, '220203002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:02:32', '2022-02-03 11:02:32'),
(4, '220203003', NULL, NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, '2022-02-03 11:15:09', '2022-02-03 11:15:09'),
(5, '220203004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:17:46', '2022-02-03 11:17:46'),
(6, '220203005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:05:56', '2022-02-03 12:05:56'),
(7, '220203006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:18:08', '2022-02-03 12:18:08'),
(8, '220203007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:20:47', '2022-02-03 12:20:47'),
(9, '220203008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:14', '2022-02-03 12:21:14'),
(10, '220203009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:49', '2022-02-03 12:21:49'),
(11, '2202030010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:25:25', '2022-02-03 12:25:25'),
(12, '2202030011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:26:11', '2022-02-03 12:26:11'),
(13, '2202040012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:38:01', '2022-02-04 12:38:01'),
(14, '2202040013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:56:14', '2022-02-04 12:56:14'),
(15, '2202050014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-05 00:29:25', '2022-02-05 00:29:25'),
(16, '2203040019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:00:51', '2022-03-04 23:00:51'),
(17, '2203040020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:01:59', '2022-03-04 23:01:59'),
(18, '2203040021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:06:04', '2022-03-04 23:06:04'),
(19, '2203040022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:08:10', '2022-03-04 23:08:10'),
(20, '2203040023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:36:12', '2022-03-05 00:36:12'),
(21, '2203040024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:39:33', '2022-03-05 00:39:33'),
(22, '2203050025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:18', '2022-03-05 12:48:18'),
(23, '2203050026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:20', '2022-03-05 12:48:20'),
(24, '2203050027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:51', '2022-03-05 12:48:51'),
(25, '2203050028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:49:46', '2022-03-05 12:49:46'),
(26, '2203050029', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:55:45', '2022-03-05 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `studentdiplomainfos`
--

CREATE TABLE `studentdiplomainfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmaexamtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmaconcentration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmainstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmacgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmascale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmalettergrade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmaroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmapassingyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmaduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentdiplomainfos`
--

INSERT INTO `studentdiplomainfos` (`id`, `sid`, `dmaexamtitle`, `dmaconcentration`, `dmainstitutename`, `dmacgpa`, `dmascale`, `dmalettergrade`, `dmaroll`, `dmapassingyear`, `dmaduration`, `created_at`, `updated_at`) VALUES
(1, '22020300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:25', '2022-02-03 10:52:25'),
(2, '220203001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:51', '2022-02-03 10:52:51'),
(3, '220203002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:02:32', '2022-02-03 11:02:32'),
(4, '220203003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:15:09', '2022-02-03 11:15:09'),
(5, '220203004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:17:46', '2022-02-03 11:17:46'),
(6, '220203005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:05:56', '2022-02-03 12:05:56'),
(7, '220203006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:18:08', '2022-02-03 12:18:08'),
(8, '220203007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:20:47', '2022-02-03 12:20:47'),
(9, '220203008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:14', '2022-02-03 12:21:14'),
(10, '220203009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:49', '2022-02-03 12:21:49'),
(11, '2202030010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:25:25', '2022-02-03 12:25:25'),
(12, '2202030011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:26:11', '2022-02-03 12:26:11'),
(13, '2202040012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:38:01', '2022-02-04 12:38:01'),
(14, '2202040013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:56:14', '2022-02-04 12:56:14'),
(15, '2202050014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-05 00:29:25', '2022-02-05 00:29:25'),
(16, '2203040019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:00:51', '2022-03-04 23:00:51'),
(17, '2203040020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:01:59', '2022-03-04 23:01:59'),
(18, '2203040021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:06:04', '2022-03-04 23:06:04'),
(19, '2203040022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:08:10', '2022-03-04 23:08:10'),
(20, '2203040023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:36:12', '2022-03-05 00:36:12'),
(21, '2203040024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:39:33', '2022-03-05 00:39:33'),
(22, '2203050025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:18', '2022-03-05 12:48:18'),
(23, '2203050026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:20', '2022-03-05 12:48:20'),
(24, '2203050027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:51', '2022-03-05 12:48:51'),
(25, '2203050028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:49:46', '2022-03-05 12:49:46'),
(26, '2203050029', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:55:45', '2022-03-05 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `studenthscinfos`
--

CREATE TABLE `studenthscinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscexamtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscconcentration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscboard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsclettergrade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgpa4subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscscale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscregistration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscpassingyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studenthscinfos`
--

INSERT INTO `studenthscinfos` (`id`, `sid`, `hscexamtitle`, `hscconcentration`, `hscinstitutename`, `hscboard`, `hsclettergrade`, `hscgpa`, `hscgpa4subject`, `hscscale`, `hscroll`, `hscregistration`, `hscpassingyear`, `hscduration`, `created_at`, `updated_at`) VALUES
(1, '22020300', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '685521472', '8789686868', '2021', '2', '2022-02-03 10:52:25', '2022-02-03 10:52:25'),
(2, '220203001', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '685521472', '8789686868', '2021', '2', '2022-02-03 10:52:51', '2022-02-03 10:52:51'),
(3, '220203002', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '685521472', '8789686868', '2021', '2', '2022-02-03 11:02:32', '2022-02-03 11:02:32'),
(4, '220203003', '0', NULL, 'Daffodil international college', 'Khulna', 'A', '4', '3', '5', '476887487', '567879452', '2021', '2', '2022-02-03 11:15:09', '2022-02-03 11:15:09'),
(5, '220203004', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '4558568', '98987775', '2021', '2', '2022-02-03 11:17:46', '2022-02-03 11:17:46'),
(6, '220203005', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '455555', '5555555', '2021', '5', '2022-02-03 12:05:56', '2022-02-03 12:05:56'),
(7, '220203006', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '255555', '456666', '2021', '2', '2022-02-03 12:18:08', '2022-02-03 12:18:08'),
(8, '220203007', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '255555', '456666', '2021', '2', '2022-02-03 12:20:47', '2022-02-03 12:20:47'),
(9, '220203008', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '255555', '456666', '2021', '2', '2022-02-03 12:21:14', '2022-02-03 12:21:14'),
(10, '220203009', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '255555', '456666', '2021', '2', '2022-02-03 12:21:49', '2022-02-03 12:21:49'),
(11, '2202030010', '0', NULL, 'Daffodil international 0', 'Dhaka', 'A+', '5', '4', '5', '2555550', '456666', '2021', '2', '2022-02-03 12:25:25', '2022-02-03 12:25:25'),
(12, '2202030011', '0', NULL, 'Daffodil international 0', 'Dhaka', 'A+', '5', '4', '5', '2555550', '456666', '2021', '2', '2022-02-03 12:26:11', '2022-02-03 12:26:11'),
(13, '2202040012', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '23442', '5578787', '2021', '2', '2022-02-04 12:38:01', '2022-02-04 12:38:01'),
(14, '2202040013', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '5454545', '55555', '2021', '2', '2022-02-04 12:56:14', '2022-02-04 12:56:14'),
(15, '2202050014', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4', '5', '77575575', '758757575', '2021', '5', '2022-02-05 00:29:25', '2022-02-05 00:29:25'),
(16, '2203040019', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4.75', '5', '7777777', '7455555', '2021', '2', '2022-03-04 23:00:51', '2022-03-04 23:00:51'),
(17, '2203040020', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4.75', '5', '7777777', '7455555', '2021', '2', '2022-03-04 23:01:59', '2022-03-04 23:01:59'),
(18, '2203040021', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4.75', '5', '444444', '57777575', '2021', '2', '2022-03-04 23:06:04', '2022-03-04 23:06:04'),
(19, '2203040022', '0', NULL, 'Daffodil international college', 'Dhaka', 'A+', '5', '4.75', '5', '7777777', '7455555', '2021', '2', '2022-03-04 23:08:10', '2022-03-04 23:08:10'),
(20, '2203040023', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '4.00', '3.00', '2', '123456', '1234556789', '2021', '5', '2022-03-05 00:36:12', '2022-03-05 00:36:12'),
(21, '2203040024', '0', NULL, 'Daffodil international college', 'Khulna', 'A+', '5', '4.75', '5', '55555555', '8555555', '2021', '5', '2022-03-05 00:39:33', '2022-03-05 00:39:33'),
(22, '2203050025', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2021', '5', '2022-03-05 12:48:18', '2022-03-05 12:48:18'),
(23, '2203050026', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2021', '5', '2022-03-05 12:48:20', '2022-03-05 12:48:20'),
(24, '2203050027', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2021', '5', '2022-03-05 12:48:51', '2022-03-05 12:48:51'),
(25, '2203050028', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2021', '5', '2022-03-05 12:49:46', '2022-03-05 12:49:46'),
(26, '2203050029', '0', NULL, 'tecnical collage', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2021', '5', '2022-03-05 12:55:45', '2022-03-05 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `studentmscinfos`
--

CREATE TABLE `studentmscinfos` (
  `id` int(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersdegreetitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersconcentration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersscale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masterslettergrade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masterspassingyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mastersduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentmscinfos`
--

INSERT INTO `studentmscinfos` (`id`, `sid`, `mastersdegreetitle`, `mastersconcentration`, `mastersinstitutename`, `mastersgpa`, `mastersscale`, `masterslettergrade`, `mastersroll`, `masterspassingyear`, `mastersduration`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:25', '2022-02-03 10:52:25'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 10:52:51', '2022-02-03 10:52:51'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:02:32', '2022-02-03 11:02:32'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:15:09', '2022-02-03 11:15:09'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 11:17:46', '2022-02-03 11:17:46'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:05:56', '2022-02-03 12:05:56'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:18:08', '2022-02-03 12:18:08'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:20:47', '2022-02-03 12:20:47'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:14', '2022-02-03 12:21:14'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:21:49', '2022-02-03 12:21:49'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:25:25', '2022-02-03 12:25:25'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-03 12:26:11', '2022-02-03 12:26:11'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:38:01', '2022-02-04 12:38:01'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-04 12:56:14', '2022-02-04 12:56:14'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-05 00:29:25', '2022-02-05 00:29:25'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:01:59', '2022-03-04 23:01:59'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:06:04', '2022-03-04 23:06:04'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 23:08:10', '2022-03-04 23:08:10'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:36:12', '2022-03-05 00:36:12'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 00:39:33', '2022-03-05 00:39:33'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:18', '2022-03-05 12:48:18'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:20', '2022-03-05 12:48:20'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:48:51', '2022-03-05 12:48:51'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:49:46', '2022-03-05 12:49:46'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 12:55:45', '2022-03-05 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grelation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sscexamtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscroll` int(100) DEFAULT NULL,
  `sscregistration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscboard` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscscale` int(11) DEFAULT NULL,
  `sscduration` int(11) DEFAULT NULL,
  `sscpassingyear` int(11) DEFAULT NULL,
  `hscexamtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscroll` int(100) DEFAULT NULL,
  `hscregistration` int(100) DEFAULT NULL,
  `hscboard` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscscale` int(11) DEFAULT NULL,
  `hscpassingyear` int(11) DEFAULT NULL,
  `bscexamtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscsubject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscroll` int(100) DEFAULT NULL,
  `bscgpa` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscscale` int(11) DEFAULT NULL,
  `bscpassingyear` int(11) DEFAULT NULL,
  `bscduration` int(11) DEFAULT NULL,
  `hscduration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `id_no`, `password`, `usertype`, `code`, `name`, `fname`, `mname`, `mobile`, `address`, `gender`, `email`, `caste`, `blgroup`, `image`, `discount`, `height`, `weight`, `fphone`, `foccupation`, `mphone`, `moccupation`, `gname`, `grelation`, `gemail`, `gphone`, `goccupation`, `gaddress`, `religion`, `dob`, `sscexamtitle`, `sscgroup`, `sscinstitutename`, `sscroll`, `sscregistration`, `sscboard`, `ssclettergrade`, `sscgpa`, `sscscale`, `sscduration`, `sscpassingyear`, `hscexamtitle`, `hscgroup`, `hscinstitutename`, `hscroll`, `hscregistration`, `hscboard`, `hsclettergrade`, `hscgpa`, `hscscale`, `hscpassingyear`, `bscexamtitle`, `bscsubject`, `bscinstitutename`, `bscroll`, `bscgpa`, `bscscale`, `bscpassingyear`, `bscduration`, `hscduration`, `created_at`, `updated_at`) VALUES
(1, '20220001', '$2y$10$gUJJBME330Ai9sh9c42SmuYoj4bQ428.lNU/.wtqaAMHr3cZkdrO2', 'Student', '2954', 'kalam khan', NULL, NULL, '01712510054', '5/12', 'Male', 'anamit08@gmail.com', NULL, 'B+', '202202250817pexels-photo-1133957.jpeg', 'Mazeda', '6 feet', '60', '01712510099', 'Business', '0171251999', 'House Wife', 'Atikull', 'uncle', 'xdxd2@hhhhh.nnn', '019176343573', 'Business', 'bbb', 'Islam', '2014-11-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 02:17:30', '2022-02-25 02:17:30'),
(17, '20210002', '$2y$10$JtZrGraL9BpNOrshewJoUOANE9h4eS1axaJUGdkLfxx7tc1HSxTfS', 'Student', '1782', 'Faisal Haq', 'aaaa', 'bbbb', '01718049686', 'Courtpara, Kushtia', 'Male', 'mehkpi@gmail.com', 'aaaa', NULL, '202206200612IMG_6295.JPG', '60000', '5.7', '65', '1234', 'b', '5678', 'h', 'wwwwwww', 'br', 'asa', '0000', 'ppppppppp', 'yyyyyyyy', 'Islam', '2000-02-07', 'ssc', 'Science', 'kzs', 123456, '654321', 'Khulna', 'A', '4.00', 5, 2, 2014, NULL, 'Science', NULL, NULL, NULL, 'Khulna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 10:12:44', '2022-06-20 10:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `studentsscinfos`
--

CREATE TABLE `studentsscinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSC_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSC_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscboard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssclettergrade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgpa4subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscscale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscregistration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscpassingyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentsscinfos`
--

INSERT INTO `studentsscinfos` (`id`, `sid`, `SSC_exam`, `SSC_subject`, `sscinstitutename`, `sscboard`, `ssclettergrade`, `sscgpa`, `sscgpa4subject`, `sscscale`, `sscroll`, `sscregistration`, `sscpassingyear`, `sscduration`, `created_at`, `updated_at`) VALUES
(1, '22020300', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '454545', '4578555', '2019', '10', '2022-02-03 10:52:25', '2022-02-03 10:52:25'),
(2, '220203001', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '454545', '4578555', '2019', '10', '2022-02-03 10:52:50', '2022-02-03 10:52:50'),
(3, '220203002', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '454545', '4578555', '2019', '10', '2022-02-03 11:02:32', '2022-02-03 11:02:32'),
(4, '220203003', NULL, NULL, 'Daffodil school', 'Dhaka', 'A', '4', '3', '5', '29970500', '23454657', '2019', '5', '2022-02-03 11:15:09', '2022-02-03 11:15:09'),
(5, '220203004', NULL, NULL, 'Daffodil school', 'Dhaka', 'A', '4', '3', '5', '124356', '889998', '2019', '10', '2022-02-03 11:17:46', '2022-02-03 11:17:46'),
(6, '220203005', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '455555', '555555', '2019', '10', '2022-02-03 12:05:56', '2022-02-03 12:05:56'),
(7, '220203006', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '255555', '555555', '2019', '5', '2022-02-03 12:18:08', '2022-02-03 12:18:08'),
(8, '220203007', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '255555', '555555', '2019', '5', '2022-02-03 12:20:47', '2022-02-03 12:20:47'),
(9, '220203008', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '255555', '555555', '2019', '5', '2022-02-03 12:21:14', '2022-02-03 12:21:14'),
(10, '220203009', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '255555', '555555', '2019', '5', '2022-02-03 12:21:49', '2022-02-03 12:21:49'),
(11, '2202030010', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '2555550', '5555550', '2019', '5', '2022-02-03 12:25:25', '2022-02-03 12:25:25'),
(12, '2202030011', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '2555550', '5555550', '2019', '5', '2022-02-03 12:26:11', '2022-02-03 12:26:11'),
(13, '2202040012', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '455', '7777777', '2019', '10', '2022-02-04 12:38:01', '2022-02-04 12:38:01'),
(14, '2202040013', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '455445', '445454', '2019', '5', '2022-02-04 12:56:14', '2022-02-04 12:56:14'),
(15, '2202050014', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4', '5', '4545452', '4575757', '2019', '5', '2022-02-05 00:29:25', '2022-02-05 00:29:25'),
(16, '2203040019', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4.75', '5', '552525785', '857575757', '2019', '5', '2022-03-04 23:00:51', '2022-03-04 23:00:51'),
(17, '2203040020', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4.75', '5', '552525785', '857575757', '2019', '5', '2022-03-04 23:01:59', '2022-03-04 23:01:59'),
(18, '2203040021', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4.75', '5', '5757575', '757757575', '2021', '10', '2022-03-04 23:06:03', '2022-03-04 23:06:03'),
(19, '2203040022', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4.75', '5', '552525785', '857575757', '2019', '5', '2022-03-04 23:08:10', '2022-03-04 23:08:10'),
(20, '2203040023', NULL, NULL, 'Tecnical', 'Dhaka', 'A', '4.00', '3.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 00:36:12', '2022-03-05 00:36:12'),
(21, '2203040024', NULL, NULL, 'Daffodil school', 'Dhaka', 'A+', '5', '4.75', '5', NULL, '55775757', '2021', '2', '2022-03-05 00:39:33', '2022-03-05 00:39:33'),
(22, '2203050025', NULL, NULL, 'Tecnical', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 12:48:18', '2022-03-05 12:48:18'),
(23, '2203050026', NULL, NULL, 'Tecnical', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 12:48:20', '2022-03-05 12:48:20'),
(24, '2203050027', NULL, NULL, 'Tecnical', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 12:48:51', '2022-03-05 12:48:51'),
(25, '2203050028', NULL, NULL, 'Tecnical school', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 12:49:46', '2022-03-05 12:49:46'),
(26, '2203050029', NULL, NULL, 'Tecnical school', 'Dhaka', 'A+', '5.00', '4.00', '2', '123456', '123456789', '2018', '5', '2022-03-05 12:55:45', '2022-03-05 12:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(16, 'semester 1', '2022-07-03 22:22:31', '2022-07-03 22:22:31'),
(17, 'semester 2', '2022-07-03 22:22:49', '2022-07-03 22:22:49'),
(18, 'semester 3', '2022-07-03 22:23:03', '2022-07-03 22:23:03'),
(19, 'semester 4', '2022-07-03 22:23:16', '2022-07-03 22:23:16'),
(20, 'semester 5', '2022-07-03 22:35:14', '2022-07-04 06:43:12'),
(21, 'semester 6', '2022-07-04 06:43:26', '2022-07-04 06:43:26'),
(22, 'semester 7', '2022-07-04 06:43:38', '2022-07-04 06:43:38'),
(23, 'semester 8', '2022-07-04 06:43:48', '2022-07-04 06:43:48'),
(24, 'Eleven', '2022-08-23 12:31:06', '2022-08-23 12:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'BLOOD CLUB', '2022-05-23 20:43:51', '2022-05-23 20:43:51'),
(7, 'CULTURAL CLUB', '2022-05-23 20:44:33', '2022-05-23 20:44:33'),
(8, 'DEBATING CLUB', '2022-05-23 20:44:52', '2022-05-23 20:44:52'),
(9, 'ECO-WARRIOR CLUB', '2022-05-23 20:45:09', '2022-05-23 20:45:09'),
(10, 'GREEN THEATER', '2022-05-23 20:45:48', '2022-05-23 20:45:48'),
(11, 'PHOTOGRAPHY CLUB', '2022-05-23 20:46:21', '2022-05-23 20:46:21'),
(12, 'READING SOCIETY', '2022-05-23 20:46:51', '2022-05-23 20:46:51'),
(13, 'SPORTS CLUB', '2022-05-23 20:47:02', '2022-05-23 20:47:02'),
(14, 'BUSINESS CLUB', '2022-05-23 20:47:44', '2022-05-23 20:47:44'),
(15, 'CINE CLUB', '2022-05-23 20:47:51', '2022-05-23 20:47:51'),
(16, 'COMPUTER CLUB', '2022-05-23 20:48:12', '2022-05-23 20:48:12'),
(17, 'EEE CLUB', '2022-05-23 20:48:23', '2022-05-23 20:48:23'),
(18, 'ENGLISH CLUB', '2022-05-23 20:48:42', '2022-05-23 20:48:42'),
(19, 'LAW CLUB', '2022-05-23 20:48:51', '2022-05-23 20:48:51'),
(20, 'SOCIAL BONDING CLUB', '2022-05-23 20:49:15', '2022-05-23 20:49:15'),
(21, 'TEXTILE CLUB', '2022-05-23 20:49:22', '2022-05-23 20:49:22'),
(22, 'Science', '2022-08-23 12:32:28', '2022-08-23 12:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `assign_subject_id` int(11) DEFAULT NULL,
  `exam_type_id` int(11) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_permissions`
--

CREATE TABLE `student_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_semester` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_sem_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_paid_amou` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_within` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_permissions`
--

INSERT INTO `student_permissions` (`id`, `application_for`, `student_id`, `student_name`, `dept_name`, `campus`, `current_semester`, `current_sem_year`, `student_mobile`, `student_email`, `father_name`, `father_occupation`, `father_number`, `last_paid_amou`, `current_due`, `pay_within`, `apply_reason`, `member_image`, `created_at`, `updated_at`) VALUES
(1, 'Course Registration', '65', 'S.M Sarowar', 'EEE', 'City', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'asdf', 'asdf5', '01677997957', '5', '54', '44', 'asdfwe', 'user/student/permissionImages/16544808081891.jpeg', '2022-06-05 20:00:08', '2022-06-05 20:00:08'),
(2, 'Course Registration', '65', 'S.M Sarowar', 'EEE', 'City', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'asdf', 'asdf5', '01677997957', '5', '54', '44', 'asdfwe', 'user/student/permissionImages/16544808701175.jpeg', '2022-06-05 20:01:10', '2022-06-05 20:01:10'),
(3, 'Course Registration', '65', 'S.M Sarowar', 'MBA(Regular)', 'Permanent', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'dfasd', 'asdf', '01677997957', '55', '48', '56', 'asdf', 'public/user/student/permissionImages/1654481197881.jpeg', '2022-06-05 20:06:37', '2022-06-05 20:06:37'),
(4, 'Course Registration', '65', 'S.M Sarowar', 'JMC', 'City', 'Spring', '565', '01677997957', 'sarowara8@gmail.com', 'asdf', 'asdf', '01677997957', '5', '3', '5', 'rasf', 'public/user/student/permissionImages/1656726709372.png', '2022-07-02 05:51:49', '2022-07-02 05:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_semesters`
--

CREATE TABLE `student_semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_semesters`
--

INSERT INTO `student_semesters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'spring', '2022-08-30 13:02:04', '2022-08-30 13:03:38'),
(2, 'Fall', '2022-08-30 13:12:05', '2022-08-30 13:12:05'),
(3, 'summer', '2022-08-30 13:12:20', '2022-08-30 13:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'morning', '2022-02-24 07:06:21', '2022-02-24 07:06:21'),
(2, 'Day', '2022-02-24 07:06:31', '2022-02-24 07:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE `student_years` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2010', '2022-01-22 05:01:32', '2022-05-10 20:53:26'),
(2, '2011', '2022-02-24 07:01:32', '2022-05-10 20:53:36'),
(3, '2012', '2022-02-24 07:01:51', '2022-05-10 20:53:44'),
(5, '2013', '2022-02-24 07:02:22', '2022-05-10 20:54:43'),
(8, '2014', '2022-03-09 22:34:01', '2022-03-09 22:34:01'),
(9, '2015', '2022-03-09 22:37:16', '2022-05-10 20:55:08'),
(11, '2016', '2022-05-10 20:55:32', '2022-05-10 20:55:32'),
(12, '2017', '2022-05-10 20:55:41', '2022-05-10 20:55:41'),
(13, '2018', '2022-05-10 20:55:55', '2022-05-10 20:55:55'),
(15, '2020', '2022-05-10 20:56:21', '2022-05-10 20:56:21'),
(16, '2021', '2022-05-10 20:56:37', '2022-05-10 20:56:37'),
(17, '2022', '2022-05-10 20:56:47', '2022-05-10 20:56:47'),
(18, 'hjjhghjghj', '2022-08-22 23:13:12', '2022-08-22 23:13:12'),
(19, '2024', '2022-08-23 12:31:51', '2022-08-23 12:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `syndicates`
--

CREATE TABLE `syndicates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syndicates`
--

INSERT INTO `syndicates` (`id`, `designation`, `name`, `email`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Member', 'Hasanul Haq Inu, MP', 'towfiquekst87@gmail.com', 'Nominee, Board of Trustees', '202205280504Chairman.jpeg', '2022-05-28 09:04:01', '2022-05-28 09:04:01'),
(5, 'Member', 'Afroza Haq', 'anamit08@gmail.com', 'Member, Board of Trustee', '202205280505Afroza Haque Rina.jpg', '2022-05-28 09:05:10', '2022-05-28 09:05:10'),
(6, 'Member', 'Professor Dr.Mohammad Mamoon', 'treasurer@rmu.ac.bd', 'Treasurer', '202205280509Professor Dr.Mohammad Mamoon.jpg', '2022-05-28 09:09:16', '2022-05-28 09:09:16'),
(7, 'Member', 'Professor Dr. Md. Shahidur Rahman', 'shahidur@rmu.ac.bd', 'Dean, Faculty of Arts and Social Sciences', '202205280514de.jpg', '2022-05-28 09:14:23', '2022-05-28 09:14:23'),
(8, 'Member', 'Muhammad Shamsur Rahman Babu', 'anamit08@gmail.com', 'Secretary, Board of Trustees', '202205280517Shamsur Rahman Babu.jpg', '2022-05-28 09:17:12', '2022-05-28 09:17:12'),
(9, 'Chairman', 'Professor Dr. Mohammad Shahjahan Ali', 'aliaciu@yahoo.com', 'Vice-Chancellor', '202205280521shahjahan_ali.png', '2022-05-28 09:21:03', '2022-05-28 09:21:03'),
(10, 'Member', 'Professor Dr. Shaikh Abdus Salam', 'anamit08@gmail.com', 'Vice Chancellor of the Islamic University,', '202205280537dd7d898287506d05d7b6272e3c21215c.jpg', '2022-05-28 09:37:09', '2022-05-28 09:37:09'),
(11, 'Member', 'Professor Dr. Md. Anwarul Haque', 'haqueanwarul41@yahoo.com', 'dept. of Biotechnology and Genetic Engineering\r\nIslamic University, Kushtia, Bangladesh', '202205280611Professor Dr. Md. Anwarul Haque.jpg', '2022-05-28 09:47:32', '2022-05-28 10:11:52'),
(12, 'Member Secretary', 'Dr. Most. Ismat Ara Khatun', 'registrar@rmu.ac.bd', 'Registrar (In Charge)', '202205280559Dr. Most. Ismat Ara Khatu.jpg', '2022-05-28 09:59:09', '2022-05-28 09:59:09'),
(13, 'Member', 'Professor Dr. Mohammad Johurul Islam', 'johurul1974@yahoo.co.in', 'Department of Law, Islamic University, Kushtia', '202205280600Johurul Islam.jpg', '2022-05-28 10:00:29', '2022-05-28 10:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `systememails`
--

CREATE TABLE `systememails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_security` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `systememails`
--

INSERT INTO `systememails` (`id`, `email_type`, `smtp_username`, `smtp_password`, `smtp_server`, `smtp_port`, `smtp_security`, `smtp_auth`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'BDR', 'BDRfd', 'smtp.bdsoft.org', '21', NULL, 'true', '2022-05-24 23:44:07', '2022-05-24 23:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Teacher,Employee,Admin',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NID` int(25) DEFAULT NULL,
  `blgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grelation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscsub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscboard` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscscale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscpassingyear` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscduration` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscsub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscboard` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscscale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscpassingyear` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscduration` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsc_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscsub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscboard` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscscale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscpassingyear` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bscduration` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msc_exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscsub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscinstitutename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscboard` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msclettergrade` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscgpa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscscale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscpassingyear` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mscduration` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `id_no`, `password`, `usertype`, `code`, `name`, `fname`, `mname`, `mobile`, `address`, `gender`, `email`, `NID`, `blgroup`, `image`, `discount`, `height`, `weight`, `fphone`, `foccupation`, `mphone`, `moccupation`, `gname`, `grelation`, `gemail`, `gphone`, `goccupation`, `gaddress`, `religion`, `dob`, `role`, `join_date`, `designation_id`, `salary`, `status`, `profile_photo_path`, `ssc_exam`, `sscsub`, `sscinstitutename`, `sscboard`, `ssclettergrade`, `sscgpa`, `sscscale`, `sscpassingyear`, `sscduration`, `hsc_exam`, `hscsub`, `hscinstitutename`, `hscboard`, `hsclettergrade`, `hscgpa`, `hscscale`, `hscpassingyear`, `hscduration`, `bsc_exam`, `bscsub`, `bscinstitutename`, `bscboard`, `bsclettergrade`, `bscgpa`, `bscscale`, `bscpassingyear`, `bscduration`, `msc_exam`, `mscsub`, `mscinstitutename`, `mscboard`, `msclettergrade`, `mscgpa`, `mscscale`, `mscpassingyear`, `mscduration`, `dept_id`, `faculty_id`, `created_at`, `updated_at`) VALUES
(5, '20220001', '$2y$10$4R8SKYsvMa6z0DV/PRTcVuGXi9UR6mwdecDqbLv9tBy5BW11TMcEC', NULL, '9034', 'Md. Mehedi Hasan Naim', 'Md. Keramot Ali', 'Most. Nazma Parvin', '8801515-238387', 'Vill: Debuttor, Post office: Debuttor, Post Code: 6610,  Thana: Atghoria, District: Pabna', 'Male', 'naim.cu11@gmail.com', NULL, 'B+', '2022053004421.jpg', NULL, '5', '6', '8801745-964266', 'Job', '8801745-964266', 'Job', 'Dr. Md Aktaruzzaman', '01965918143', 'towfiquekst87@gmail.com', NULL, NULL, NULL, 'Islam', '1994-10-09', NULL, NULL, NULL, NULL, 1, NULL, 'SSC', 'Science', 'Debuttor Kabi Bonday Ali Miah High School, Pabna', 'Dhaka', 'A+', '5.00', '5.00', '2009', '4.00', 'HSC', 'Science', 'Govt. Shaheed Bulbul College, Pabna', 'Dhaka', 'A+', '5.00', '5.00', '2011', '4.00', 'B.Sc', 'Science', 'Computer Science & Engineering', 'Khulna', 'A', '3.50', '3.50', '2016', '3.00', NULL, 'Science', NULL, 'Khulna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 08:42:03', '2022-05-30 08:42:03'),
(6, '20220001', '$2y$10$hYbfNkWG6wWaxX.zGCk0FuCWRJ.rh7tkRZ/Lrtfb./SX3SJeeU.ae', NULL, '4224', 'Md. Tanvir Amin', 'Md. Bani Amin', 'Shahnewaz Begum', '01730950550', 'Koltola, Courtpara', 'Male', 'aminmd.tanvir@gmail.com', NULL, 'B+', '202205300831Applicant Pic..jpg', NULL, '68', '90', '01940417385', 'Municipality Executive Officer', '01734274444', 'Housewife', 'Abdullah Al Zubayer', 'Brother', 'zubaerranacseiu@gmail.com', NULL, NULL, NULL, 'Islam', '1995-12-11', NULL, NULL, NULL, NULL, 1, NULL, 'SSC', 'Science', 'Charfession T. Baret Higher Secondary School, Charfession, Bhola', 'Barisal', 'A+', '5', '5.00', '2010', '2', 'HSC', 'Science', 'Charfession Govt. College, Charfession,', 'Barisal', 'A+', '5.00', '5.00', '2012', '2', 'Bachelor of Science (B.sc) in EEE', 'Science', 'International University of Business Agriculture and Technology (IUBAT)', 'Dhaka', 'A-', '3.45', '4', '2019', '4', 'Master of Science (M.sc) in ICT', 'Science', 'Bangladesh University of Professionals (BUP)', 'Dhaka', 'A', '3.92', '4', '2021', '2', NULL, NULL, '2022-05-30 12:31:14', '2022-05-30 12:31:14'),
(7, '20220001', '$2y$10$xuUpefngpvUUk/cWbwBLK.OEW3zIfYqgnNfspdWYIftcEkypJk2R.', NULL, '5429', 'FAHMIDA HAQUE MIM', 'Md. Mofazzal Haque', 'Ferdouchi Khatun', '01755336292', 'Gurudaspur, Natore, Bangladesh', 'Female', 'fhmimu09@gmail.com', NULL, 'B+', '202206010647mim.png', NULL, '60', '50', '01755336292', 'Job', '01755336292', 'Housewife', 'Fahmida Haque Mim', 'Father', 'towfiquekst87@gmail.com', NULL, NULL, NULL, 'Islam', '1998-10-05', NULL, NULL, NULL, NULL, 1, NULL, 'SSC', 'Science', 'Gurudaspur Pilot  High School', 'Khulna', 'A', '4.94', '5.00', '2014', '1', 'HSC', 'Science', 'Rosey Mozammel  Women’s College', 'Khulna', 'A', '4.00', '5.00', '2016', '2', 'B.Sc', 'Science', 'Bangladesh Army  University of  Engineering &  Technology', 'Khulna', 'A-', '3.76', '4.00', '2021', '4', NULL, 'Science', NULL, 'Khulna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 10:47:54', '2022-06-01 10:47:54'),
(8, '20220001', '$2y$10$bLDEzADePNKPKcyld7rx1uHdLkwZk/kd3Mo3k4Gw9ufA9PxexC4Zq', NULL, '3677', 'Most.Fahmida Sultana Mim', 'MD. Abdur Rashid', 'Most. SaidaHosne Ara', '8801706250455', 'House no-161, Baharampur moor,  Rajpara, Rajshahi-6000', 'Female', 'fahmida.bauet@gmail.com', NULL, 'B+', '202206020518Screenshot_2022_0602_110845.png', NULL, '60', '60', '8801706250455', 'Busniess', '8801706250455', 'Housewife', 'MD. Abdur Rashid', 'Father', '8801706250455', NULL, NULL, NULL, 'Islam', '1997-07-19', NULL, NULL, NULL, NULL, 1, NULL, 'SSC', 'Science', 'Masjid Mission Academy,  Ghoramara,Boalia,  Rajshahi', 'Khulna', 'A+', '4.69', '5.00', '2014', '2', 'HSC', 'Science', 'Pakhuria Women’s College, Nawabganj', 'Khulna', 'A', '4.25', '5', '2016', '2', 'Bachelor of Science (B.sc) in EEE', 'Science', 'Bangladesh Army University    of Engineering & Technology (BAUET)', 'Khulna', 'A', '3.94', '4.00', '2021', '4', NULL, 'Science', NULL, 'Khulna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 09:18:47', '2022-06-02 09:18:47'),
(9, '20220001', '$2y$10$aCSDH358shzkB5kjZJsl2eLE7dhW0eyeaKyrNVySUktWnnuPrtSv6', NULL, '1032', 'Sabbir Sumon', 'Md. Murad Ali', 'Mst. Mukti Parvin', '+8801749811833', 'House No 21, Acim Kocim Road (Upozilla Road),  Kushtia Sadar, Kushtia.', 'Male', '01749811833sabbir@gmail.com', NULL, 'O+', '202206120449230000.jpg', NULL, '68', '70', '+8801749811833', 'Job', '+8801749811833', 'Housewife', 'Md. Murad Ali', 'Father', '+8801749811833', NULL, NULL, NULL, 'Islam', '1990-07-14', NULL, NULL, NULL, NULL, 1, NULL, 'SSC', 'Science', 'Kushtia Zilla School, Kushtia.', 'Khulna', 'A', '4.', '4.44', '2005', '5', 'HSC', 'Arts', 'Kushtia Government College,', 'Khulna', 'A-', '3.70', '5.00', '2006', '2', 'B.A. (Honors) English', 'Arts', 'Islamic University, Kushtia.', 'Jessore', 'B', '3.20', '4', '2012', '4', 'Department: English Language and Literature', 'Arts', 'Islamic University, Kushtia.', 'Jessore', 'B', '3.31', '4', '2016', '2', NULL, NULL, '2022-06-12 08:49:02', '2022-06-12 08:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `transactionrecords`
--

CREATE TABLE `transactionrecords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refinv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(16,2) NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xrate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactionrecords`
--

INSERT INTO `transactionrecords` (`id`, `invno`, `refinv`, `debit`, `amount`, `credit`, `cheque_no`, `cheque_date`, `ref`, `status`, `note`, `xrate`, `date`, `uid`, `brid`, `created_at`, `updated_at`) VALUES
(15, 'JOU1522053', NULL, 'SU_5', 1240.00, 'SU_5', 'Note', '2022-05-05', '23456789', 'JOU', NULL, NULL, '2022-05-15', '1', NULL, NULL, NULL),
(19, 'REV1822054', NULL, 'LE_5', 5678.00, 'CU_1', 'Note', '2022-05-11', '09876543', 'REV', NULL, NULL, '2022-05-17', '1', NULL, NULL, NULL),
(20, 'JOU1822054', NULL, 'SU_5', 5678.00, 'SU_5', 'Note', '2022-05-17', '23456789', 'JOU', NULL, NULL, '2022-05-11', '1', NULL, NULL, NULL),
(21, 'EXP1822057', NULL, 'EX_1', 1240.00, 'LE_5', NULL, NULL, '09876543', 'EXP', NULL, NULL, '2022-05-20', '1', NULL, NULL, NULL),
(24, 'EXP2322059', NULL, 'EX_1', 1000.00, 'LE_5', NULL, NULL, '100', 'EXP', NULL, NULL, '2022-05-23', '1', NULL, NULL, NULL),
(29, 'COL232205', NULL, 'LE_5', 20000.00, '3', NULL, NULL, NULL, 'COL', NULL, NULL, '2022-05-23', '1', NULL, NULL, NULL),
(30, 'COL2322059', NULL, 'LE_5', 1000.00, '2', NULL, NULL, NULL, 'COL', NULL, NULL, '2022-05-23', '1', NULL, NULL, NULL),
(31, 'COL23220510', NULL, 'LE_5', 400.00, '3', NULL, NULL, NULL, 'COL', NULL, NULL, '2022-05-23', '1', NULL, NULL, NULL),
(32, 'COL23220511', NULL, 'LE_5', 100.00, '3', NULL, NULL, NULL, 'COL', NULL, NULL, '2022-05-23', '1', NULL, NULL, NULL),
(34, 'EXP30220810', NULL, 'EX_1', 5000.00, 'LE_5', NULL, NULL, 'c', 'EXP', NULL, NULL, '2022-08-30', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transportroutes`
--

CREATE TABLE `transportroutes` (
  `id` int(11) NOT NULL,
  `route_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fare` double(10,2) DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transportroutes`
--

INSERT INTO `transportroutes` (`id`, `route_title`, `fare`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'mohammmadpur to uittara', 100.00, 'no', '2022-06-10 08:11:30', '2022-06-10'),
(4, 'Ctg to Dhk', 1000.00, 'no', '2022-06-10 08:12:04', '2022-06-10'),
(5, 'kamlapur', 520.00, 'no', '2022-06-10 15:08:50', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `university_subjects`
--

CREATE TABLE `university_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_subjects`
--

INSERT INTO `university_subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Physics', '2022-02-24 07:10:52', '2022-08-31 01:00:44'),
(2, 'Chemistry', '2022-02-24 07:11:07', '2022-02-24 07:11:07'),
(3, 'Math', '2022-02-24 07:11:21', '2022-02-24 07:11:21'),
(4, 'Bangla', '2022-03-06 11:56:11', '2022-07-03 21:43:07'),
(7, 'biology', '2022-08-31 01:00:26', '2022-08-31 01:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `upload_contents`
--

CREATE TABLE `upload_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_contents`
--

INSERT INTO `upload_contents` (`id`, `title`, `type`, `available_for`, `all_student`, `class_id`, `section_id`, `dept_id`, `batch_id`, `program_id`, `description`, `content`, `date`, `added_by`, `created_at`, `updated_at`) VALUES
(11, 'Title', 'Student', 'Syllabus', NULL, 15, NULL, 1, NULL, 1, 'Description', '202205261246download (1).jpeg', '2022-05-26', NULL, '2022-05-26 16:46:00', '2022-05-26 16:46:00'),
(12, 'Title', 'Student', 'Syllabus', NULL, 15, NULL, 1, NULL, 1, 'Description', '202205261246tree-736885__340.webp', '2022-05-26', NULL, '2022-05-26 16:46:46', '2022-05-26 16:46:46'),
(13, 'Title', 'Student', 'Syllabus', NULL, 15, NULL, 1, NULL, 1, 'Description', '202205261251download.jpeg', '2022-05-26', NULL, '2022-05-26 16:51:25', '2022-05-26 16:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mohammad Anamul Huq', 'anamit08@gmail.com', NULL, '$2y$10$0mWOclPOl4ayELqQKPCPZ.3kPu3W/fEmYvkhqxqUFC1HTdpOJzY2a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2021-12-16 03:34:54', '2021-12-16 03:34:54'),
(2, 'employee', 'Abdul Haddy', NULL, NULL, '$2y$10$MQ6VfaqKMWyk/RSH0wNwyOMBrGP8EuFTL6oKy7pPO6t1ofjX43zXS', NULL, NULL, '01765005822', 'Mohammadpur/Dalmatia/5/12', 'Male', '202205181522pexels-photo-1133957 (1).webp', 'Abdul halim mia', 'Kulsum khatun', 'Islam', '2022050001', '2022-05-18', '1597', NULL, '2022-05-18', 1, 10000, 1, NULL, NULL, NULL, '2022-05-18 19:22:20', '2022-05-18 19:22:20'),
(3, 'employee', 'Abdul Haddy', NULL, NULL, '$2y$10$TvQaYsfW0XlnYQkaGCPAjeSzSgjlszY/vO6jibYwGpri/LrH6KC0i', NULL, NULL, '01712510678', 'Mohammadpur', 'Female', '202205181523environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg', 'Father Name', 'Mother Name', 'Hindu', '2022050003', '2022-05-12', '588', NULL, '2022-05-16', 2, 15000, 1, NULL, NULL, NULL, '2022-05-18 19:23:08', '2022-05-18 19:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacture_year` date DEFAULT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_licence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle_no`, `vehicle_model`, `manufacture_year`, `driver_name`, `driver_licence`, `driver_contact`, `note`, `created_at`, `updated_at`) VALUES
(11, 'kkhulna-7875556', 'Model777', '2009-06-10', 'Ariful', '77777', '01478855550', 'Good Note', '2022-06-10 08:46:35', '2022-06-10 08:46:35'),
(12, 'kusakaL84513', 'pickup', '2015-01-01', 'Ali naos', 'kuskal784512', '012544256548', 'good', '2022-06-10 09:23:30', '2022-06-10 09:23:30'),
(14, 'dhakaL84513', 'pickup', '2022-06-12', 'Driver Name', 'Dhakal784512', 'Driver Contact', 'Note', '2022-06-12 10:23:41', '2022-06-12 10:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `visitorsays`
--

CREATE TABLE `visitorsays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitorsays`
--

INSERT INTO `visitorsays` (`id`, `name`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Mahin', 'Rabindra Maitree University has confidently set its sail back in 2015 on the historic land of Kusthia. The purpose of the university is to create a real difference in tertiary level education and we are marching towards our goal. We seek for creating a university which will become a model in the demography of Bangladesh', '202206251752images.jpg', '2022-06-25 11:52:11', '2022-06-25 11:52:11'),
(8, 'oliullah', 'Rabindra Maitree University has confidently set its sail back in 2015 on the historic land of Kusthia. The purpose of the university is to create a real difference in tertiary level education and we are marching towards our goal. We seek for creating a university which will become a model in the demography of Bangladesh', '202206251752Capture.PNG', '2022-06-25 11:52:59', '2022-06-25 11:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_books`
--

CREATE TABLE `visitors_books` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `date` date NOT NULL,
  `in_time` time(6) DEFAULT NULL,
  `out_time` time(6) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors_books`
--

INSERT INTO `visitors_books` (`id`, `purpose`, `name`, `email`, `phone`, `id_card`, `no_of_people`, `date`, `in_time`, `out_time`, `note`, `image`, `created_at`, `updated_at`) VALUES
(1, 'TELL ME SOME BODY', 'azmain abedin', 'add@gmail.com', NULL, '744', 3, '2022-06-10', '04:44:00.000000', '17:05:00.000000', 'very very good', '202206100312241481639_1751762395032129_4717653489328062721_n.jpg', '2022-06-09 21:12:58', '2022-06-09 21:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `websiteinfos`
--

CREATE TABLE `websiteinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marqmessage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fblink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inskink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websiteinfos`
--

INSERT INTO `websiteinfos` (`id`, `name`, `mobile`, `phone`, `address`, `email`, `description`, `marqmessage`, `logo`, `icon`, `fblink`, `whlink`, `inskink`, `twlink`, `uid`, `created_at`, `updated_at`) VALUES
(1, 'rmu.ac.bd', '+8801319446230', '+88 02478853114,', 'Academic & Administrative Building:  97/71, Ram Chandra Roy Chowdhury Street  Courtpara, Kushtia 7000', 'info@rmu.ac.bd', 'Education for All', '***Career Opportunity: www.rmu.ac.bd******Admission going on for Summer 2022******Congratulations! to all the newly enrolled Student******COVID-19 Vaccine Registration and Data Submission******RMU Students are Requested to Contact the Admission Office for A Special Offer**', '202201270715Logoin-Logo.png', '202201270715Logoin-Logo.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-18 09:19:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academiccouncils`
--
ALTER TABLE `academiccouncils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountclasses`
--
ALTER TABLE `accountclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountgroups`
--
ALTER TABLE `accountgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountjournaldetails`
--
ALTER TABLE `accountjournaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountjournals`
--
ALTER TABLE `accountjournals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountledgers`
--
ALTER TABLE `accountledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountpaymentdetails`
--
ALTER TABLE `accountpaymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountpayments`
--
ALTER TABLE `accountpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountreceivedetails`
--
ALTER TABLE `accountreceivedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountreceives`
--
ALTER TABLE `accountreceives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountsubgroups`
--
ALTER TABLE `accountsubgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_groups`
--
ALTER TABLE `account_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_groups_name_unique` (`name`);

--
-- Indexes for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_items`
--
ALTER TABLE `add_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_item_stocks`
--
ALTER TABLE `add_item_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissionenquiries`
--
ALTER TABLE `admissionenquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignvehicles`
--
ALTER TABLE `assignvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_class_teachers`
--
ALTER TABLE `assign_class_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankaccounts`
--
ALTER TABLE `bankaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_time_tables`
--
ALTER TABLE `class_time_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintcoms`
--
ALTER TABLE `complaintcoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseaddordrops`
--
ALTER TABLE `courseaddordrops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deans`
--
ALTER TABLE `deans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmentchanges`
--
ALTER TABLE `departmentchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `disciplinarycoms`
--
ALTER TABLE `disciplinarycoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch_receives`
--
ALTER TABLE `dispatch_receives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeedepartments`
--
ALTER TABLE `employeedepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeedesignations`
--
ALTER TABLE `employeedesignations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employeedesignations_name_unique` (`name`);

--
-- Indexes for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leavetypes`
--
ALTER TABLE `employee_leavetypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_leavetypes_name_unique` (`name`);

--
-- Indexes for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `expensedetails`
--
ALTER TABLE `expensedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultys`
--
ALTER TABLE `facultys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feesmasters`
--
ALTER TABLE `feesmasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feestypes`
--
ALTER TABLE `feestypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_collections`
--
ALTER TABLE `fees_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_collection_details`
--
ALTER TABLE `fees_collection_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_discounts`
--
ALTER TABLE `fees_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_groups`
--
ALTER TABLE `fees_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_types`
--
ALTER TABLE `fees_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fincoms`
--
ALTER TABLE `fincoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostelrooms`
--
ALTER TABLE `hostelrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `improvementexams`
--
ALTER TABLE `improvementexams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventorystoreitems`
--
ALTER TABLE `inventorystoreitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventorysuppliers`
--
ALTER TABLE `inventorysuppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_stock_items`
--
ALTER TABLE `inventory_stock_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_items`
--
ALTER TABLE `issue_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_id` (`item_category_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `issue_returns`
--
ALTER TABLE `issue_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_return_details`
--
ALTER TABLE `issue_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stores`
--
ALTER TABLE `item_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_suppliers`
--
ALTER TABLE `item_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_purposes_name_unique` (`name`);

--
-- Indexes for table `librarystudents`
--
ALTER TABLE `librarystudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_grades`
--
ALTER TABLE `marks_grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobileaccounts`
--
ALTER TABLE `mobileaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboards`
--
ALTER TABLE `noticeboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phonecalllogs`
--
ALTER TABLE `phonecalllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printheaders`
--
ALTER TABLE `printheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerslips`
--
ALTER TABLE `registerslips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sessionsettings`
--
ALTER TABLE `sessionsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setup_front_offices`
--
ALTER TABLE `setup_front_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialgroups`
--
ALTER TABLE `socialgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentadmit_cards`
--
ALTER TABLE `studentadmit_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentattendancedetails`
--
ALTER TABLE `studentattendancedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentattendances`
--
ALTER TABLE `studentattendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentbasicinfos`
--
ALTER TABLE `studentbasicinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentbscinfos`
--
ALTER TABLE `studentbscinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdiplomainfos`
--
ALTER TABLE `studentdiplomainfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studenthscinfos`
--
ALTER TABLE `studenthscinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentmscinfos`
--
ALTER TABLE `studentmscinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsscinfos`
--
ALTER TABLE `studentsscinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_permissions`
--
ALTER TABLE `student_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_semesters`
--
ALTER TABLE `student_semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_semesters_name_unique` (`name`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `student_years`
--
ALTER TABLE `student_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_years_name_unique` (`name`);

--
-- Indexes for table `syndicates`
--
ALTER TABLE `syndicates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systememails`
--
ALTER TABLE `systememails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportroutes`
--
ALTER TABLE `transportroutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_subjects`
--
ALTER TABLE `university_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_subjects_name_unique` (`name`);

--
-- Indexes for table `upload_contents`
--
ALTER TABLE `upload_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorsays`
--
ALTER TABLE `visitorsays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors_books`
--
ALTER TABLE `visitors_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteinfos`
--
ALTER TABLE `websiteinfos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academiccouncils`
--
ALTER TABLE `academiccouncils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `accountclasses`
--
ALTER TABLE `accountclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `accountgroups`
--
ALTER TABLE `accountgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `accountjournaldetails`
--
ALTER TABLE `accountjournaldetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `accountjournals`
--
ALTER TABLE `accountjournals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accountledgers`
--
ALTER TABLE `accountledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `accountpaymentdetails`
--
ALTER TABLE `accountpaymentdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `accountpayments`
--
ALTER TABLE `accountpayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `accountreceivedetails`
--
ALTER TABLE `accountreceivedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accountreceives`
--
ALTER TABLE `accountreceives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accountsubgroups`
--
ALTER TABLE `accountsubgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `account_groups`
--
ALTER TABLE `account_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_items`
--
ALTER TABLE `add_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_item_stocks`
--
ALTER TABLE `add_item_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admissionenquiries`
--
ALTER TABLE `admissionenquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignvehicles`
--
ALTER TABLE `assignvehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assign_class_teachers`
--
ALTER TABLE `assign_class_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bankaccounts`
--
ALTER TABLE `bankaccounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bots`
--
ALTER TABLE `bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_time_tables`
--
ALTER TABLE `class_time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaintcoms`
--
ALTER TABLE `complaintcoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `courseaddordrops`
--
ALTER TABLE `courseaddordrops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deans`
--
ALTER TABLE `deans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departmentchanges`
--
ALTER TABLE `departmentchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `disciplinarycoms`
--
ALTER TABLE `disciplinarycoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dispatch_receives`
--
ALTER TABLE `dispatch_receives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeedepartments`
--
ALTER TABLE `employeedepartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employeedesignations`
--
ALTER TABLE `employeedesignations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_leavetypes`
--
ALTER TABLE `employee_leavetypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expensedetails`
--
ALTER TABLE `expensedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facultys`
--
ALTER TABLE `facultys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feesmasters`
--
ALTER TABLE `feesmasters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feestypes`
--
ALTER TABLE `feestypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_collections`
--
ALTER TABLE `fees_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fees_collection_details`
--
ALTER TABLE `fees_collection_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fees_discounts`
--
ALTER TABLE `fees_discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fees_groups`
--
ALTER TABLE `fees_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fees_types`
--
ALTER TABLE `fees_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fincoms`
--
ALTER TABLE `fincoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hostelrooms`
--
ALTER TABLE `hostelrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `improvementexams`
--
ALTER TABLE `improvementexams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventorystoreitems`
--
ALTER TABLE `inventorystoreitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventorysuppliers`
--
ALTER TABLE `inventorysuppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory_items`
--
ALTER TABLE `inventory_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory_stock_items`
--
ALTER TABLE `inventory_stock_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_items`
--
ALTER TABLE `issue_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_returns`
--
ALTER TABLE `issue_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `issue_return_details`
--
ALTER TABLE `issue_return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_stores`
--
ALTER TABLE `item_stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_suppliers`
--
ALTER TABLE `item_suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `librarystudents`
--
ALTER TABLE `librarystudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marks_grades`
--
ALTER TABLE `marks_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mobileaccounts`
--
ALTER TABLE `mobileaccounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `noticeboards`
--
ALTER TABLE `noticeboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phonecalllogs`
--
ALTER TABLE `phonecalllogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `printheaders`
--
ALTER TABLE `printheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registerslips`
--
ALTER TABLE `registerslips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessionsettings`
--
ALTER TABLE `sessionsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setup_front_offices`
--
ALTER TABLE `setup_front_offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `socialgroups`
--
ALTER TABLE `socialgroups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentadmit_cards`
--
ALTER TABLE `studentadmit_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentattendancedetails`
--
ALTER TABLE `studentattendancedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentattendances`
--
ALTER TABLE `studentattendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentbasicinfos`
--
ALTER TABLE `studentbasicinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studentbscinfos`
--
ALTER TABLE `studentbscinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `studentdiplomainfos`
--
ALTER TABLE `studentdiplomainfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `studenthscinfos`
--
ALTER TABLE `studenthscinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `studentmscinfos`
--
ALTER TABLE `studentmscinfos`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `studentsscinfos`
--
ALTER TABLE `studentsscinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student_permissions`
--
ALTER TABLE `student_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_semesters`
--
ALTER TABLE `student_semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `syndicates`
--
ALTER TABLE `syndicates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `systememails`
--
ALTER TABLE `systememails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transportroutes`
--
ALTER TABLE `transportroutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university_subjects`
--
ALTER TABLE `university_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upload_contents`
--
ALTER TABLE `upload_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visitorsays`
--
ALTER TABLE `visitorsays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitors_books`
--
ALTER TABLE `visitors_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
