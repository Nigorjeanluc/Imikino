
CREATE TABLE `journalist` (
  `ID` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` datetime NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journalist`
--
ALTER TABLE `journalist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journalist`
--
ALTER TABLE `journalist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
