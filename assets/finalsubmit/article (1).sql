-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2021 at 11:35 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `issra`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `aname` varchar(1000) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `doi` varchar(50) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `i_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `aname`, `designation`, `doi`, `file`, `i_id`, `v_id`) VALUES
(1, 'Frequency of BK-Virus in Post Renal Transplant Recipients: A Single Center Experience', 'Dr. Syed Munib*, Dr. Jehanzeb, Dr. Muhammad Shaid, Dr. Syed Arif, Dr. Fazal Wahab, Dr. Zafar Ahmed K', 'Dr. Syed Munib', '10.5281/zenodo.5545720', 'IJAMS-1(1) 1-4.pdf', 1, 1),
(2, 'Efficacy and Safety of Percutaneous Nephrolithotomy in Staghorn Renal Calculi', 'Mohammad Shahzad, Fazal wahab, Zafar Ahmed Khan, Dr. Jehan zeb, Dr.syed arif, Muhmmand Asif', 'Zafar Ahmed Khan', '10.5281/zenodo.5545837', 'IJAMS-1(1) 5-8 Ff.pdf', 1, 1),
(3, 'Effectiveness of Natural Products in Erectile Dysfunction: Having No Other Choice', 'Syed Munib, Dr. Jehan zeb, Rahmat Ali, Muhmmand Shahid, Yasir Khalili, Muhmmand Asif', 'Dr. Jehan zeb', '10.5281/zenodo.5545850', 'IJAMS-1(1) 9-12FF.pdf', 1, 1),
(5, 'Manual Vacuum Aspiration (M.V.A) Versus Conventional Evacuation and Curettage in Early Pregnancy Los', 'Dr Uzma Shaheen,  Dr Sumaira Yasmin, Dr Nazia Liaqat, Dr Sonia Rafique', 'Dr Sumaira Yasmin', '10.5281/zenodo.5545853', 'IJAMS-1(1) 17-20 FF.pdf', 1, 1),
(6, 'Frequency of Anxiety and Depression in COVID-19 Patients', 'Nowsherwan, Mohammad Nawaz, Sabir Rehman, Fawad Rahim, Muhammad Abbass, Sami Ulhaq', 'Mohammad Nawaz', '10.5281/zenodo.5548050', 'IJAMS-1(1) 13-16.pdf', 1, 1),
(7, 'An Overview of Efficacy of Clotrimazole in Otomycosis', 'Sana Ullah Ubaid Ullah, Muhmmand Said, Faisal, Habib Ullah, Khalil Ahmed Orakzai', 'Sana Ullah', '10.5281/zenodo.5548016', 'IJAMS-1(1) 21-23.pdf', 1, 1),
(8, 'Factors Affecting the Difficulties of Science, Technology and Mathematics Students in Learning Mathe', 'Klaire Mata, Aira Kay Dela Cruz, John Heinrich Narito, Ria Joy Tuluan, Darin Jan Tindowen', 'Darin Jan Tindowen', '10.5281/zenodo.5561056', 'IJMB 1(1) 1-7.pdf', 2, 2),
(9, 'Study on Employee Retention and Commitment', 'Suman Sahu', 'Suman Sahu', '10.5281/zenodo.5561076', 'IJMB 1(1) 8-11.pdf', 2, 2),
(11, 'Impact of Social Media on Academic Performance of Students', 'Shahina Begum ', 'Shahina Begum ', '10.5281/zenodo.5561099', 'IJMB 1(1) 17-21.pdf', 2, 2),
(12, 'The Consequential Impact of Music for a Distinctive Preferment of an Occupation', ' Dr. Rudrarup Gupta, Tapasi Banerjee', 'Dr. Rudrarup Gupta', '10.5281/zenodo.5561170', 'IJMB 1(1) 17-21.pdf', 2, 2),
(13, 'Effect of Social Media Communication on Selected Tourist Sites in Nigeria', 'Amaechi-Chijioke, Juliet, Dr.Echeta,Sydney.Onuchukwu', 'Amaechi-Chijioke, Juliet', '10.5281/zenodo.5561186', 'IJMB 1(1) 22-19.pdf', 2, 2),
(14, 'Relevance of Photographs in Newspaper Journalism', 'Buike Oparaugo', 'Buike Oparaugo', '10.5281/zenodo.5561205', 'IJMB 1(1) 30-37.pdf', 2, 2),
(15, 'New Uzbekistan: New Approaches to the Ideological Education System', 'Alimbetova GÃºlparshin ', 'Alimbetova GÃºlparshin ', '10.5281/zenodo.5563231', 'IJAHSS 1(1) 1-4.pdf', 3, 3),
(16, 'The Service Delivery during the SARS VoV-19 Pandemic in Orthopedic Surgery, Saidu Group of Teaching Hospital, Swat', 'Dr. Asghar Khan, Dr. Nowsherwan, Dr. Anila Basit, Dr. Faisal Ahmed, Dr. Mohmmand Khalid Khan, Dr. Imran Ullah', 'Dr. Mohmmand Khalid Khan', '10.5281/zenodo.5564316', 'IJMP 1(1) 1-4 CC.pdf', 4, 4),
(17, 'A Comparative Study of the Incidence of Atrial Fibrillation (AF) Inpatients with Ischemic Stroke, Ho', 'Dr. Nowsherwan, Mohmmand Nawaz, Muhammad Abbas, Sabir Rehman4, Rahmat Ali, Muhammad Khalid Khan', 'Muhammad Abbas', '10.5281/zenodo.5563919', 'IJMP 1(1) 5-9.pdf', 4, 4),
(18, 'Magnetic Resonance Imaging and X-rays in Emergency Assessment of Patients with suspected Acute Strok', 'Syed Nasir Shah, Walayat Shah, Dr. Muhammad Shoaib, Dr. Nowsherwan, Dr. Anila Basit, Bakth Jamal', 'Dr. Muhammad Shoaib', '10.5281/zenodo.5563994', 'IJMP 1(1) 10-15.pdf', 4, 4),
(19, 'Comparison of Early Complications of Elective Tracheostomy with Early Complications of Emergency Tracheostomy', 'Habib Ur Rehman, Ubaid Ullah, Sana Ullah, Muhmmand Said4 Raza Muhmmand, Khalil Ahmed Orakzai', 'Sana Ullah', '10.5281/zenodo.5565778', 'IJMP 1(1) 16-19 CC.pdf', 4, 4),
(20, 'The Element of Ambivalence in Robert Frostâ€™s Poetry', 'M.D.Thamarai Selvi,  Dr. Aruna Arputha Malar', 'M.D.Thamarai Selvi', '10.5281/zenodo.5569069', 'IJELL 1(1) 1-3 cc.pdf', 5, 5),
(21, 'The Art of Characterization in Chinua Achebeâ€™s Things Fall Apart and No Longer at Ease', 'M.D.Thamarai Selvi, Dr. Aruna Arputha Malar', 'M.D.Thamarai Selvi', '10.5281/zenodo.5569083', 'IJELL 1(1) 4-10 cc.pdf', 5, 5),
(22, 'Man-Woman relationship in Robert Frost Poems â€“ A Study', 'M.D.Thamarai Selvi,  Dr. Aruna Arputha Malar', 'M.D.Thamarai Selvi', '10.5281/zenodo.5569087', 'IJELL 1(1) 11-14 cc.pdf', 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
