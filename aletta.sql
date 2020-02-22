/*J'ai ajouter des nouvelles tables comme remise,fournisseur,client et groupe*/



CREATE TABLE `remise` (
  `ID` int(11) NOT NULL,
  `type_remise` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `remise`
--

INSERT INTO `remise` (`ID`, `type_remise`) VALUES
(1, 'Desactive'),
(2, 'Remise a prix fixe'),
(3, 'Remise au pourcentage');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `remise`
--
ALTER TABLE `remise`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `remise`
--
ALTER TABLE `remise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

CREATE TABLE `pos_ibi_fournisseurs` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(200) NOT NULL,
  `BP` varchar(200) NOT NULL,
  `TEL` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `DATE_CREATION` datetime NOT NULL,
  `DATE_MOD` datetime NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Contenu de la table `pos_ibi_fournisseurs`
--

INSERT INTO `pos_ibi_fournisseurs` (`ID`, `NOM`, `BP`, `TEL`, `EMAIL`, `DATE_CREATION`, `DATE_MOD`, `AUTHOR`, `DESCRIPTION`) VALUES
(1, 'VYAGIZIMANA', '1234', '78392018', 'hab@gmail.com', '2020-02-20 10:15:54', '0000-00-00 00:00:00', '', 'hhhhhhhhhhhhhhhhhh'),
(5, 'KAGABO', '123', '78493023', 'Habimana@gmail.com', '2020-02-20 14:02:07', '0000-00-00 00:00:00', '1', 'jwqkuyhweh');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  ADD PRIMARY KEY (`ID`);





CREATE TABLE `pos_ibi_clients_groups` (
  `ID_GROUP` int(11) NOT NULL,
  `NAME_GROUP` varchar(200) NOT NULL,
  `DESCRIPTION_GROUP` text NOT NULL,
  `DATE_CREATION_GROUP` datetime NOT NULL,
  `DATE_MODIFICATION_GROUP` datetime NOT NULL,
  `DISCOUNT_TYPE_GROUP` varchar(220) NOT NULL,
  `DISCOUNT_PERCENT_GROUP` float NOT NULL,
  `DISCOUNT_AMOUNT_GROUP` float NOT NULL,
  `DISCOUNT_ENABLE_SCHEDULE_GROUP` varchar(220) NOT NULL,
  `DISCOUNT_START_GROUP` datetime NOT NULL,
  `DISCOUNT_END_GROUP` datetime NOT NULL,
  `AUTHOR_GROUP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_clients_groups`
--

INSERT INTO `pos_ibi_clients_groups` (`ID_GROUP`, `NAME_GROUP`, `DESCRIPTION_GROUP`, `DATE_CREATION_GROUP`, `DATE_MODIFICATION_GROUP`, `DISCOUNT_TYPE_GROUP`, `DISCOUNT_PERCENT_GROUP`, `DISCOUNT_AMOUNT_GROUP`, `DISCOUNT_ENABLE_SCHEDULE_GROUP`, `DISCOUNT_START_GROUP`, `DISCOUNT_END_GROUP`, `AUTHOR_GROUP`) VALUES
(8, 'ONG', 'y', '2020-02-21 16:18:23', '0000-00-00 00:00:00', '2', 20, 30000, 'no', '2020-02-05 06:18:00', '2020-02-22 06:18:00', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  ADD PRIMARY KEY (`ID_GROUP`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_ibi_clients_groups`
--
ALTER TABLE `pos_ibi_clients_groups`
  MODIFY `ID_GROUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `pos_ibi_fournisseurs`
--
ALTER TABLE `pos_ibi_fournisseurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  CREATE TABLE `pos_ibi_clients` (
  `ID_CLIENT` int(11) NOT NULL,
  `NOM_CLIENT` varchar(200) NOT NULL,
  `PRENOM_CLIENT` varchar(200) NOT NULL,
  `POIDS_CLIENT` int(11) NOT NULL,
  `TEL_CLIENT` varchar(200) NOT NULL,
  `EMAIL_CLIENT` varchar(200) NOT NULL,
  `DESCRIPTION_CLIENT` text NOT NULL,
  `DATE_NAISSANCE_CLIENT` datetime NOT NULL,
  `ADRESSE_CLIENT` text NOT NULL,
  `NBR_COMMANDES_CLIENT_CLIENT` int(11) NOT NULL,
  `OVERALL_COMMANDES_CLIENT` int(11) NOT NULL,
  `DISCOUNT_ACTIVE_CLIENT` int(11) NOT NULL,
  `TOTAL_SPEND_CLIENT` float NOT NULL,
  `LAST_ORDER_CLIENT` varchar(200) NOT NULL,
  `AVATAR_CLIENT` varchar(200) NOT NULL,
  `STATE_CLIENT` varchar(200) NOT NULL,
  `CITY_CLIENT` varchar(200) NOT NULL,
  `POST_CODE_CLIENT` varchar(200) NOT NULL,
  `COUNTRY_CLIENT` varchar(200) NOT NULL,
  `COMPANY_NAME_CLIENT` varchar(200) NOT NULL,
  `DATE_CREATION_CLIENT` datetime NOT NULL,
  `DATE_MOD_CLIENT` datetime NOT NULL,
  `REF_GROUP_CLIENT` int(11) NOT NULL,
  `AUTHOR_CLIENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pos_ibi_clients`
--

INSERT INTO `pos_ibi_clients` (`ID_CLIENT`, `NOM_CLIENT`, `PRENOM_CLIENT`, `POIDS_CLIENT`, `TEL_CLIENT`, `EMAIL_CLIENT`, `DESCRIPTION_CLIENT`, `DATE_NAISSANCE_CLIENT`, `ADRESSE_CLIENT`, `NBR_COMMANDES_CLIENT_CLIENT`, `OVERALL_COMMANDES_CLIENT`, `DISCOUNT_ACTIVE_CLIENT`, `TOTAL_SPEND_CLIENT`, `LAST_ORDER_CLIENT`, `AVATAR_CLIENT`, `STATE_CLIENT`, `CITY_CLIENT`, `POST_CODE_CLIENT`, `COUNTRY_CLIENT`, `COMPANY_NAME_CLIENT`, `DATE_CREATION_CLIENT`, `DATE_MOD_CLIENT`, `REF_GROUP_CLIENT`, `AUTHOR_CLIENT`) VALUES
(19, 'BIGABO', 'Jean Claude', 0, '78392842', 'bigabo@gmail.com', 'erjk', '1992-02-08 06:34:00', '', 0, 0, 0, 0, '', '', '', 'Bujumbura', '', 'Burundi', '283902', '2020-02-21 16:35:10', '2020-02-21 16:35:10', 8, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  ADD PRIMARY KEY (`ID_CLIENT`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pos_ibi_clients`
--
ALTER TABLE `pos_ibi_clients`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

