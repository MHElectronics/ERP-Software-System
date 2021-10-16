-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 03:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `ID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `ReceivedDate` date NOT NULL,
  `ReceivingAmount` int(11) NOT NULL,
  `ReceivingTool` varchar(255) NOT NULL,
  `InsertEmpID` int(11) NOT NULL,
  `UpgradeEmpID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chequetable`
--

CREATE TABLE `chequetable` (
  `ID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `ADOrRCS` varchar(3) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Bank` varchar(255) NOT NULL,
  `ChequeNo` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `ReceiveDate` date NOT NULL,
  `ChequeDate` date NOT NULL,
  `HonoredDate` date DEFAULT NULL,
  `DishonoredDate` date DEFAULT NULL,
  `OldChequeNo` int(11) DEFAULT NULL,
  `ChequeInBy` varchar(255) NOT NULL,
  `ChequeManagedBy` varchar(255) DEFAULT NULL,
  `ChequeOutBy` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Attachment` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 0,
  `Process` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `ID` int(11) NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `JoiningDate` date NOT NULL,
  `ResignDate` date NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `NID` varchar(17) NOT NULL,
  `Last_degree` varchar(10) NOT NULL,
  `Last_institute` varchar(100) NOT NULL,
  `Last_result` varchar(4) NOT NULL,
  `Last_year` varchar(4) NOT NULL,
  `Attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`ID`, `EmployeeId`, `Name`, `Mobile`, `Address`, `JoiningDate`, `ResignDate`, `Email`, `Password`, `NID`, `Last_degree`, `Last_institute`, `Last_result`, `Last_year`, `Attachment`) VALUES
(1, 1001, 'Morshed Ahmed', '0123456789', '869 East Shewrapara Mirpur Dhaka', '2021-10-12', '0000-00-00', 'hasan168989@gmail.co', '$2y$10$lAFezDpV3OwAy', '123456', 'ssc', 'asd', '3.00', '1234', '491518288_web-hosting-png-23808.png'),
(3, 1002, 'Rafiq', '1623145688', '869 East Shewrapara Mirpur Dhaka', '2021-10-12', '0000-00-00', 'hasan168@gmail.com', '$2y$10$XH85kDJ75LZLe', '123', 'jsc', 'asd', '3.00', '1234', '397980893_34-342157_web-hosting-illustration-hd-png-download.png');

-- --------------------------------------------------------

--
-- Table structure for table `memberinfo`
--

CREATE TABLE `memberinfo` (
  `ID` int(11) NOT NULL,
  `MemberID` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `MobileNo` varchar(15) NOT NULL,
  `AltMobileNo` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Catagory` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `NID` varchar(17) NOT NULL,
  `JoiningDate` date NOT NULL,
  `AD` int(11) NOT NULL,
  `MSP` int(11) NOT NULL,
  `RCS` int(11) NOT NULL,
  `ReferenceID` int(11) NOT NULL,
  `Remarks` varchar(1000) NOT NULL,
  `APhoto` varchar(255) DEFAULT NULL,
  `AForm` varchar(255) DEFAULT NULL,
  `ANid` varchar(255) DEFAULT NULL,
  `ANoc` varchar(255) DEFAULT NULL,
  `ACertificate-1` varchar(255) DEFAULT NULL,
  `ACertificate-2` varchar(255) DEFAULT NULL,
  `ACertificate-3` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberinfo`
--

INSERT INTO `memberinfo` (`ID`, `MemberID`, `Name`, `Email`, `Password`, `MobileNo`, `AltMobileNo`, `Address`, `Area`, `Catagory`, `Type`, `NID`, `JoiningDate`, `AD`, `MSP`, `RCS`, `ReferenceID`, `Remarks`, `APhoto`, `AForm`, `ANid`, `ANoc`, `ACertificate-1`, `ACertificate-2`, `ACertificate-3`, `Status`) VALUES
(48, '1001', 'Morshed Ahmed', 'm@gmail.com', '$2y$10$CmP9Eg3Kba5Sz', '1231231231', '1623145688', '869 East Shewrapara Mirpur Dhaka', 'efrwrt', 'Sponser_Member', 'Genarel', '1001', '2021-10-04', 200000, 10000, 1000, 1001, 'asd', '500438550_Screenshot (1).png', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `memberpersonalinfo`
--

CREATE TABLE `memberpersonalinfo` (
  `ID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `SpouseName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `Child-1` varchar(255) DEFAULT NULL,
  `Child-2` varchar(255) DEFAULT NULL,
  `Child-3` varchar(255) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `HomeDistrict` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberpersonalinfo`
--

INSERT INTO `memberpersonalinfo` (`ID`, `MemberID`, `SpouseName`, `FatherName`, `MotherName`, `Child-1`, `Child-2`, `Child-3`, `DateOfBirth`, `HomeDistrict`) VALUES
(1, 48, 'Morsheda', 'Hello', 'Hello', 'HEllo', 'Hello', 'Hello', '2021-09-27', 'sdfds');

-- --------------------------------------------------------

--
-- Table structure for table `memberprofessionandeducation`
--

CREATE TABLE `memberprofessionandeducation` (
  `ID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `OfficeName` varchar(255) NOT NULL,
  `OfficeAddress` varchar(255) NOT NULL,
  `Degree-1` varchar(255) NOT NULL,
  `Institute-1` varchar(255) NOT NULL,
  `Result-1` varchar(255) NOT NULL,
  `year_1` varchar(4) DEFAULT NULL,
  `Degree-2` varchar(255) DEFAULT NULL,
  `Institute-2` varchar(255) DEFAULT NULL,
  `Result-2` varchar(255) DEFAULT NULL,
  `year_2` varchar(4) DEFAULT NULL,
  `Degree-3` varchar(255) DEFAULT NULL,
  `Institute-3` varchar(255) DEFAULT NULL,
  `Result-3` varchar(255) DEFAULT NULL,
  `year_3` varchar(4) DEFAULT NULL,
  `Degree-4` varchar(255) DEFAULT NULL,
  `Institute-4` varchar(255) DEFAULT NULL,
  `Result-4` varchar(255) DEFAULT NULL,
  `year_4` varchar(4) DEFAULT NULL,
  `Degree-5` varchar(255) DEFAULT NULL,
  `Institute-5` varchar(255) DEFAULT NULL,
  `Result-5` varchar(255) DEFAULT NULL,
  `year_5` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberprofessionandeducation`
--

INSERT INTO `memberprofessionandeducation` (`ID`, `MemberID`, `Profession`, `Designation`, `OfficeName`, `OfficeAddress`, `Degree-1`, `Institute-1`, `Result-1`, `year_1`, `Degree-2`, `Institute-2`, `Result-2`, `year_2`, `Degree-3`, `Institute-3`, `Result-3`, `year_3`, `Degree-4`, `Institute-4`, `Result-4`, `year_4`, `Degree-5`, `Institute-5`, `Result-5`, `year_5`) VALUES
(1, 48, 'Student', 'Student', 'UIU', 'United', 'hons', 'uiu', '138', NULL, '', '', '', NULL, '', '', '', NULL, '', '', '', NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rcsopt`
--

CREATE TABLE `rcsopt` (
  `ID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `ReceivedDate` date NOT NULL,
  `ReceivingAmount` int(11) NOT NULL,
  `ReceivingTool` varchar(255) NOT NULL,
  `InsertEmpID` int(11) NOT NULL,
  `UpgradeEmpID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabmembadrcstotal`
--

CREATE TABLE `tabmembadrcstotal` (
  `MemADRCSID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `TotalAD` int(11) NOT NULL,
  `TotalPaidAD` int(11) DEFAULT NULL,
  `TotalDueAD` int(11) DEFAULT NULL,
  `TotalRCS` int(11) DEFAULT NULL,
  `TotalPaidRCS` int(11) DEFAULT NULL,
  `TotalDueRCS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabpaymenttrack`
--

CREATE TABLE `tabpaymenttrack` (
  `TrackID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `RCSCash` int(11) NOT NULL DEFAULT 0,
  `RCSCheque` int(11) NOT NULL DEFAULT 0,
  `RCSTotal` int(11) NOT NULL DEFAULT 0,
  `ADCash` int(11) NOT NULL DEFAULT 0,
  `ADCheque` int(11) NOT NULL DEFAULT 0,
  `ADTotal` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabrcsaccounts`
--

CREATE TABLE `tabrcsaccounts` (
  `RCSTotID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `TotalRCSMonth` int(11) DEFAULT NULL,
  `TotalRCSAmount` int(11) DEFAULT NULL,
  `TotalRCSPaid` int(11) DEFAULT NULL,
  `TotalDuesRCS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabrcsmaster`
--

CREATE TABLE `tabrcsmaster` (
  `RCSID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `RCSMonth` int(11) NOT NULL,
  `AmtRCSToBePaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tabadopt_ibfk_1` (`MemberID`),
  ADD KEY `tabadopt_ibfk_2` (`InsertEmpID`),
  ADD KEY `tabadopt_ibfk_3` (`UpgradeEmpID`);

--
-- Indexes for table `chequetable`
--
ALTER TABLE `chequetable`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ChequeNo` (`ChequeNo`),
  ADD KEY `tabadopt_ibfk_7` (`MemberID`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `NID` (`NID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `memberinfo`
--
ALTER TABLE `memberinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `NID` (`NID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `memberpersonalinfo`
--
ALTER TABLE `memberpersonalinfo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `memberprofessionandeducation`
--
ALTER TABLE `memberprofessionandeducation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `rcsopt`
--
ALTER TABLE `rcsopt`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tabadopt_ibfk_4` (`MemberID`),
  ADD KEY `tabadopt_ibfk_5` (`InsertEmpID`),
  ADD KEY `tabadopt_ibfk_6` (`UpgradeEmpID`);

--
-- Indexes for table `tabmembadrcstotal`
--
ALTER TABLE `tabmembadrcstotal`
  ADD PRIMARY KEY (`MemADRCSID`),
  ADD KEY `tabadopt_ibfk_8` (`MemberID`);

--
-- Indexes for table `tabpaymenttrack`
--
ALTER TABLE `tabpaymenttrack`
  ADD PRIMARY KEY (`TrackID`),
  ADD KEY `tabadopt_ibfk_9` (`MemberID`);

--
-- Indexes for table `tabrcsaccounts`
--
ALTER TABLE `tabrcsaccounts`
  ADD PRIMARY KEY (`RCSTotID`),
  ADD KEY `tabadopt_ibfk_10` (`MemberID`);

--
-- Indexes for table `tabrcsmaster`
--
ALTER TABLE `tabrcsmaster`
  ADD PRIMARY KEY (`RCSID`),
  ADD KEY `tabadopt_ibfk_11` (`MemberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chequetable`
--
ALTER TABLE `chequetable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberinfo`
--
ALTER TABLE `memberinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `memberpersonalinfo`
--
ALTER TABLE `memberpersonalinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberprofessionandeducation`
--
ALTER TABLE `memberprofessionandeducation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rcsopt`
--
ALTER TABLE `rcsopt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabmembadrcstotal`
--
ALTER TABLE `tabmembadrcstotal`
  MODIFY `MemADRCSID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabpaymenttrack`
--
ALTER TABLE `tabpaymenttrack`
  MODIFY `TrackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabrcsaccounts`
--
ALTER TABLE `tabrcsaccounts`
  MODIFY `RCSTotID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabrcsmaster`
--
ALTER TABLE `tabrcsmaster`
  MODIFY `RCSID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopt`
--
ALTER TABLE `adopt`
  ADD CONSTRAINT `tabadopt_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`),
  ADD CONSTRAINT `tabadopt_ibfk_2` FOREIGN KEY (`InsertEmpID`) REFERENCES `employeeinfo` (`ID`),
  ADD CONSTRAINT `tabadopt_ibfk_3` FOREIGN KEY (`UpgradeEmpID`) REFERENCES `employeeinfo` (`ID`);

--
-- Constraints for table `chequetable`
--
ALTER TABLE `chequetable`
  ADD CONSTRAINT `tabadopt_ibfk_7` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `memberpersonalinfo`
--
ALTER TABLE `memberpersonalinfo`
  ADD CONSTRAINT `memberpersonalinfo_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `memberprofessionandeducation`
--
ALTER TABLE `memberprofessionandeducation`
  ADD CONSTRAINT `memberprofessionandeducation_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `rcsopt`
--
ALTER TABLE `rcsopt`
  ADD CONSTRAINT `tabadopt_ibfk_4` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`),
  ADD CONSTRAINT `tabadopt_ibfk_5` FOREIGN KEY (`InsertEmpID`) REFERENCES `employeeinfo` (`ID`),
  ADD CONSTRAINT `tabadopt_ibfk_6` FOREIGN KEY (`UpgradeEmpID`) REFERENCES `employeeinfo` (`ID`);

--
-- Constraints for table `tabmembadrcstotal`
--
ALTER TABLE `tabmembadrcstotal`
  ADD CONSTRAINT `tabadopt_ibfk_8` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `tabpaymenttrack`
--
ALTER TABLE `tabpaymenttrack`
  ADD CONSTRAINT `tabadopt_ibfk_9` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `tabrcsaccounts`
--
ALTER TABLE `tabrcsaccounts`
  ADD CONSTRAINT `tabadopt_ibfk_10` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);

--
-- Constraints for table `tabrcsmaster`
--
ALTER TABLE `tabrcsmaster`
  ADD CONSTRAINT `tabadopt_ibfk_11` FOREIGN KEY (`MemberID`) REFERENCES `memberinfo` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
