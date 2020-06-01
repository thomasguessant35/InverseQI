gener_dep_h = function(vec_image){
  res = matrix(0,9,9)
  #Si le premier motif est sur la colonne de gauche de la premiere image
  for(i in c(1,4,7)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i+1] = 1
        res[j+2,i+2] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(2,5,8)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i+1] = 1
        res[j+2,i-1] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(3,6,9)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i-2] = 1
        res[j+2,i-1] = 1
      }
    }
  }
  return(res)
}

gener_dep_h_v = function(vec_image){
  res = matrix(0,9,9)
  #Si le premier motif est sur la colonne de gauche de la premiere image
  for(i in c(1,4,7)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i+1] = 1
        res[j+6,i+2] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(2,5,8)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i+1] = 1
        res[j+6,i-1] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(3,6,9)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i-2] = 1
        res[j+6,i-1] = 1
      }
    }
  }
  return(res)
}

gener_dep_v = function(vec_image){
  res = matrix(0,9,9)
  #Si le premier motif est sur la ligne du haut de la premiere image
  for(i in c(1,2,3)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i+3] = 1
        res[j+2,i+6] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(4,5,6)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i+3] = 1
        res[j+2,i-3] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(7,8,9)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i-6] = 1
        res[j+2,i-3] = 1
      }
    }
  }
  return(res)
}

gener_dep_v_v = function(vec_image){
  res = matrix(0,9,9)
  #Si le premier motif est sur la ligne du haut de la premiere image
  for(i in c(1,2,3)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i+3] = 1
        res[j+6,i+6] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(4,5,6)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i+3] = 1
        res[j+6,i-3] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(7,8,9)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i-6] = 1
        res[j+6,i-3] = 1
      }
    }
  }
  return(res)
}

gener_diag_haut_droite = function(vec_image){
  res=matrix(0,9,9)
  if(vec_image[1]>=1){
    res[2,8] = 1
    res[3,6] = 1
  }
  if(vec_image[2]>=1){
    res[2,9] = 1
    res[3,4] = 1
  }
  if(vec_image[3]>=1){
    res[2,7] = 1
    res[3,5] = 1
  }
  if(vec_image[4]>=1){
    res[2,2] = 1
    res[3,9] = 1
  }
  if(vec_image[5]>=1){
    res[2,3] = 1
    res[3,7] = 1
  }
  if(vec_image[6]>=1){
    res[2,1] = 1
    res[3,8] = 1
  }
  if(vec_image[7]>=1){
    res[2,5] = 1
    res[3,3] = 1
  }
  if(vec_image[8]>=1){
    res[2,6] = 1
    res[3,1] = 1
  }
  if(vec_image[9]>=1){
    res[2,1] = 1
    res[3,5] = 1
  }
  res[1,] = vec_image
  res[4,] = res[1,]
  res[7,] = res[1,]
  res[5,] = res[2,]
  res[8,] = res[2,]
  res[6,] = res[3,]
  res[9,] = res[3,]
  return(res)
}

gener_repet = function(vec_image){
  res = matrix(0,9,9)
  for(i in 1:9){
    if(vec_image[i] == 1){
      for(j in 1:9){
        res[j,i] = 1
      }
    }
  }
  return(res)
}

gener_diag_haut_gauche = function(vec_image){
  res=matrix(0,9,9)
  if(vec_image[1]>=1){
    res[2,9] = 1
    res[3,5] = 1
  }
  if(vec_image[2]>=1){
    res[2,7] = 1
    res[3,6] = 1
  }
  if(vec_image[3]>=1){
    res[2,8] = 1
    res[3,4] = 1
  }
  if(vec_image[4]>=1){
    res[2,3] = 1
    res[3,8] = 1
  }
  if(vec_image[5]>=1){
    res[2,1] = 1
    res[3,9] = 1
  }
  if(vec_image[6]>=1){
    res[2,2] = 1
    res[3,7] = 1
  }
  if(vec_image[7]>=1){
    res[2,6] = 1
    res[3,2] = 1
  }
  if(vec_image[8]>=1){
    res[2,4] = 1
    res[3,3] = 1
  }
  if(vec_image[9]>=1){
    res[2,5] = 1
    res[3,1] = 1
  }
  res[1,] = vec_image
  res[4,] = res[1,]
  res[7,] = res[1,]
  res[5,] = res[2,]
  res[8,] = res[2,]
  res[6,] = res[3,]
  res[9,] = res[3,]
  return(res)
}

gener_diag_bas_droite = function(vec_image)
{
  res=matrix(0,9,9)
  if(vec_image[1]>=1){
    res[2,5] = 1
    res[3,9] = 1
  }
  if(vec_image[2]>=1){
    res[2,6] = 1
    res[3,7] = 1
  }
  if(vec_image[3]>=1){
    res[2,4] = 1
    res[3,8] = 1
  }
  if(vec_image[4]>=1){
    res[2,8] = 1
    res[3,3] = 1
  }
  if(vec_image[5]>=1){
    res[2,9] = 1
    res[3,1] = 1
  }
  if(vec_image[6]>=1){
    res[2,7] = 1
    res[3,2] = 1
  }
  if(vec_image[7]>=1){
    res[2,2] = 1
    res[3,6] = 1
  }
  if(vec_image[8]>=1){
    res[2,3] = 1
    res[3,4] = 1
  }
  if(vec_image[9]>=1){
    res[2,1] = 1
    res[3,5] = 1
  }
  res[1,] = vec_image
  res[4,] = res[1,]
  res[7,] = res[1,]
  res[5,] = res[2,]
  res[8,] = res[2,]
  res[6,] = res[3,]
  res[9,] = res[3,]
  return(res)
}

gener_diag_bas_gauche = function(vec_image)
{
  res=matrix(0,9,9)
  if(vec_image[1]>=1){
    res[2,6] = 1
    res[3,8] = 1
  }
  if(vec_image[2]>=1){
    res[2,4] = 1
    res[3,9] = 1
  }
  if(vec_image[3]>=1){
    res[2,5] = 1
    res[3,7] = 1
  }
  if(vec_image[4]>=1){
    res[2,9] = 1
    res[3,2] = 1
  }
  if(vec_image[5]>=1){
    res[2,7] = 1
    res[3,3] = 1
  }
  if(vec_image[6]>=1){
    res[2,8] = 1
    res[3,1] = 1
  }
  if(vec_image[7]>=1){
    res[2,3] = 1
    res[3,5] = 1
  }
  if(vec_image[8]>=1){
    res[2,1] = 1
    res[3,6] = 1
  }
  if(vec_image[9]>=1){
    res[2,2] = 1
    res[3,4] = 1
  }
  res[1,] = vec_image
  res[4,] = res[1,]
  res[7,] = res[1,]
  res[5,] = res[2,]
  res[8,] = res[2,]
  res[6,] = res[3,]
  res[9,] = res[3,]
  return(res)
}

gener_repet = function(vec_image)
{
  res = matrix(0,9,9)
  for(i in 1:9){
    if(vec_image[i] == 1){
      for(j in 1:9){
        res[j,i] = 1
      }
    }
  }
  return(res)
}

gener_ajout_h = function(vec_image)
{
  res = matrix(0,9,9)
  #Si le premier motif est sur la colonne de gauche de la premiere image
  for(i in c(1,4,7)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i+1] = 1
        res[j+2,i] = 1
        res[j+2,i+1] = 1
        res[j+2,i+2] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(2,5,8)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i+1] = 1
        res[j+2,i+1] =1
        res[j+2,i] = 1
        res[j+2,i-1] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(3,6,9)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i-2] = 1
        res[j+2,i] = 1
        res[j+2,i-2] = 1
        res[j+2,i-1] = 1
      }
    }
  }
  return(res)
}

gener_ajout_h_v = function(vec_image)
{
  res = matrix(0,9,9)
  #Si le premier motif est sur la colonne de gauche de la premiere image
  for(i in c(1,4,7)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i+1] = 1
        res[j+6,i] = 1
        res[j+6,i+1] = 1
        res[j+6,i+2] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne du milieu de la premiere image
  for(i in c(2,5,8)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i+1] = 1
        res[j+6,i+1] =1
        res[j+6,i] = 1
        res[j+6,i-1] = 1
      }
    }
  }
  #Si le premier motif est sur la colonne de droite de la premiere image
  for(i in c(3,6,9)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i-2] = 1
        res[j+6,i] = 1
        res[j+6,i-2] = 1
        res[j+6,i-1] = 1
      }
    }
  }
  return(res)
}

gener_ajout_v = function(vec_image)
{
  res = matrix(0,9,9)
  #Si le premier motif est sur la ligne du haut de la premiere image
  for(i in c(1,2,3)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i+3] = 1
        res[j+2,i] = 1
        res[j+2,i+3] = 1
        res[j+2,i+6] = 1
      }
    }
  }
  #Si le premier motif est sur la ligne du milieu de la premiere image
  for(i in c(4,5,6)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i+3] = 1
        res[j+2,i] = 1
        res[j+2,i+3] = 1
        res[j+2,i-3] = 1
      }
    }
  }
  #Si le premier motif est sur la ligne du bas de la premiere image
  for(i in c(7,8,9)){
    if(vec_image[i]==1){
      for(j in c(1,4,7)){
        res[j,i] = 1
        res[j+1,i] = 1
        res[j+1,i-6] = 1
        res[j+2,i] = 1
        res[j+2,i-6] =1
        res[j+2,i-3] = 1
      }
    }
  }
  return(res)
}

gener_ajout_v_v = function(vec_image)
{
  res = matrix(0,9,9)
  #Si le premier motif est sur la ligne du haut de la premiere image
  for(i in c(1,2,3)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i+3] = 1
        res[j+6,i] = 1
        res[j+6,i+3] = 1
        res[j+6,i+6] = 1
      }
    }
  }
  #Si le premier motif est sur la ligne du milieu de la premiere image
  for(i in c(4,5,6)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i+3] = 1
        res[j+6,i] = 1
        res[j+6,i+3] = 1
        res[j+6,i-3] = 1
      }
    }
  }
  #Si le premier motif est sur la ligne du bas de la premiere image
  for(i in c(7,8,9)){
    if(vec_image[i]==1){
      for(j in c(1,2,3)){
        res[j,i] = 1
        res[j+3,i] = 1
        res[j+3,i-6] = 1
        res[j+6,i] = 1
        res[j+6,i-6] =1
        res[j+6,i-3] = 1
      }
    }
  }
  return(res)
}

intobin = function (x) 
{
  y <- as.integer(x)
  class(y) <- "binmode"
  y <- as.character(y)
  dim(y) <- dim(x)
  y
}

number2binary = function(number, noBits)
{
  binary_vector = rev(as.numeric(intToBits(number)))
  if(missing(noBits)) {
    return(binary_vector)
  } else {
    binary_vector[-(1:(length(binary_vector) - noBits))]
  }
}

gener_vecteurs2 = function()
{
  vecteurs = list()
  for(j in 1:((2^9)-1)){
    #Permet de convertir un nombre en binaire
    vecteurs[[j]] = matrix(number2binary(j,9), nrow=1)
  }
  return(vecteurs)
}

gener_vecteurs = function()
{
  for(j in 1:((2^9)-1)){
    #Permet de convertir un nombre en binaire
    vec = c(intToBin(j))
    vec = strsplit(vec,"")
    vec_final = c()
    if(length(vec[[1]])>8){
      for(l in 1:length(vec[[1]])){
        vec_final = cbind(vec_final, vec[[1]][l])
      }
    }
    else{
      for(i in 1:(9-length(vec[[1]]))){
        vec_final = cbind(vec_final,0)
      }
      for(k in 1:length(vec[[1]])){
        vec_final  = cbind(vec_final, vec[[1]][k])
      }
    }
    vecteurs[[j]] = vec_final
    #print(vec_final)
  }
  return(vecteurs)
}

gener_question_h = function(vecteurs, list_h, list_v, nom_fct_h)
{
  sam = sample(length(vecteurs),1)
  question=matrix(0,9,9)
  question[1,] = list_h[[sam]][1,]
  question[2,] = list_h[[sam]][2,]
  question[3,] = list_h[[sam]][3,]
  question[4,] = list_v[[sam]][4,]
  question[7,] = list_v[[sam]][7,]
  cinquieme = nom_fct_h(question[4,])
  question[5,] = cinquieme[2,]
  question[6,] = cinquieme[3,]
  huitieme = nom_fct_h(question[7,])
  question[8,] = huitieme[2,]
  question[9,] = huitieme[3,]
  
  #question = as.numeric(list_1[[sam]])+as.numeric(list_2[[sam]])
  #for(k in 1:81){
  #  if(question[k] >= 1){
  #    question[k] = 1
  #  }
  #}
  #question = matrix(question, ncol = 9)
  return(question)
}

gener_question_v = function(vecteurs, list_h, list_v, nom_fct_v)
{
  sam = sample(length(vecteurs),1)
  question=matrix(0,9,9)
  question[1,] = list_h[[sam]][1,]
  question[2,] = list_h[[sam]][2,]
  question[3,] = list_h[[sam]][3,]
  question[4,] = list_v[[sam]][4,]
  question[7,] = list_v[[sam]][7,]
  cinquieme = nom_fct_v(question[2,])
  question[5,] = cinquieme[4,]
  question[8,] = cinquieme[7,]
  huitieme = nom_fct_v(question[3,])
  question[6,] = huitieme[4,]
  question[9,] = huitieme[7,]
  
  #question = as.numeric(list_1[[sam]])+as.numeric(list_2[[sam]])
  #for(k in 1:81){
  #  if(question[k] >= 1){
  #    question[k] = 1
  #  }
  #}
  #question = matrix(question, ncol = 9)
  return(question)
}

gener_listes = function(vecteurs){
  nb_fonctions = 13
  list_finale = list()
  list_repet= list()
  list_dep_h = list()
  list_dep_h_v = list()
  list_dep_v = list()
  list_dep_v_v = list()
  list_diag_haut_droite =list()
  list_diag_haut_gauche = list()
  list_diag_bas_droite = list()
  list_diag_bas_gauche = list()
  list_ajout_h = list()
  list_ajout_h_v = list()
  list_ajout_v = list()
  list_ajout_v_v = list()
  for(i in 1:length(vecteurs)){
    list_repet[[i]] = gener_repet(vecteurs[[i]])
    list_dep_h[[i]] = gener_dep_h(vecteurs[[i]])
    list_dep_h_v[[i]] = gener_dep_h_v(vecteurs[[i]])
    list_dep_v[[i]] = gener_dep_v(vecteurs[[i]])
    list_dep_v_v[[i]] = gener_dep_v_v(vecteurs[[i]])
    list_diag_haut_droite[[i]] = gener_diag_haut_droite(vecteurs[[i]])
    list_diag_haut_gauche[[i]] = gener_diag_haut_gauche(vecteurs[[i]])
    list_diag_bas_droite[[i]] = gener_diag_bas_droite(vecteurs[[i]])
    list_diag_bas_gauche[[i]] = gener_diag_bas_gauche(vecteurs[[i]])
    list_ajout_h[[i]] = gener_ajout_h(vecteurs[[i]])
    list_ajout_h_v[[i]] = gener_ajout_h_v(vecteurs[[i]])
    list_ajout_v[[i]] = gener_ajout_v(vecteurs[[i]])
    list_ajout_v_v[[i]] = gener_ajout_v_v(vecteurs[[i]])
  }
  list_finale = c(list_finale,list_repet, list_dep_h, list_dep_v, list_diag_bas_droite, list_diag_bas_gauche,
                  list_diag_haut_droite, list_diag_haut_gauche, list_ajout_h, list_ajout_v, list_ajout_h_v, list_ajout_v_v, 
                  list_dep_h_v, list_dep_v_v)
  length(list_finale)
  #doublonstest<-which(duplicated(list_finale))
  #list_finale<-list_finale[-doublonstest]
  list_finale <- unique( list_finale)
  length(list_finale)
  long = length(list_finale)

  list_h = list()
  list_h[[1]] = list_repet
  list_h[[2]] = list_dep_h
  list_h[[3]] = list_dep_v
  list_h[[4]] = list_ajout_h
  list_h[[5]] = list_ajout_v
  list_h[[6]] = list_diag_bas_droite
  list_h[[7]] = list_diag_bas_gauche
  list_h[[8]] = list_diag_haut_droite
  list_h[[9]] = list_diag_haut_gauche
  
  list_v = list()
  list_v[[1]] = list_repet
  list_v[[2]] = list_dep_h_v
  list_v[[3]] = list_dep_v_v
  list_v[[4]] = list_ajout_h_v
  list_v[[5]] =list_ajout_v_v
  return(list(list_hor = list_h, list_ver = list_v, list_final = list_finale))
}

gener_iq  = function(){
  sam_h = sample(9,1)
  sam_v = sample(5,1)
  samsam = sample(2,1)
  if(samsam == 1){
    if(sam_h == 1){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_repet)
      print(" Horizontalement : Répétition horizontale")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 2){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_dep_h)
      print("Horizontalement : Déplacement horizontal")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 3){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_dep_v)
      print("Horizontalement : Déplacement vertical ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 4){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_ajout_h)
      print("Horizontalement : Ajout horizontal ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 5){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_ajout_v)
      print("Horizontalement : Ajout vertical ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 6){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_diag_bas_droite)
      print("Horizontalement : Déplacement diagonale bas droite ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 7){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_diag_bas_gauche)
      print("Horizontalement : Déplacement diagonale bas gauche ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 8){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_diag_haut_droite)
      print("Horizontalement : Déplacement diagonale haut droite ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    if(sam_h == 9){
      question = gener_question_h(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_diag_haut_gauche)
      print("Horizontalement : Déplacement diagonale haut gauche ")
      if(sam_v == 1){
        print(" Verticalement : Repetition verticale")
      }
      if(sam_v == 2){
        print("Verticalement : Deplacement horizontal")
      }
      if(sam_v == 3){
        print("Verticalement : Deplacement vertical")
      }
      if(sam_v == 4){
        print("Verticalement : Ajout horizontal")
      }
      if(sam_v == 5){
        print("Verticalement : Ajout vertical")
      }
    }
    print("pattern horizontal")
  }
  else{
    if(sam_v == 1){
      question = gener_question_v(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_repet)
      print("Repetition")
    }
    if(sam_v == 2){
      question = gener_question_v(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_dep_h_v)
      print("Déplacemnt horizontal verticalement")
    }
    if(sam_v == 3){
      question = gener_question_v(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_dep_v_v)
      print("Déplacement vertical verticalement")
    }
    if(sam_v == 4){
      question = gener_question_v(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_ajout_h_v)
      print("Ajout horizontal verticalement")
    }
    if(sam_v == 5){
      question = gener_question_v(vecteurs, list_h[[sam_h]], list_v[[sam_v]], gener_ajout_v_v)
      print("Ajout vertical verticalement")
    }
    if(sam_h == 1){
      print("Horizontalement : Répétition")
    }
    if(sam_h == 2){
      print("Horizontalement : Deplacemnt horizontal")
    }
    if(sam_h == 3){
      print("Horizontalement : Deplacement vertical")
    }
    if(sam_h == 4){
      print("Horizontalement : Ajout horizontal")
    }
    if(sam_h == 5){
      print("Horizontalement : Ajout vertical")
    }
    if(sam_h == 6){
      print("Horizontalement : Depacement Diagonale bas droite")
    }
    if(sam_h == 7){
      print("Horizontalement : Deplacement Diagonale bas gauche")
    }
    if(sam_h == 8){
      print("Horizontalement : Deplacement Diagonale haut droite")
    }
    if(sam_h == 9){
      print("Horizontalement : Deplacement Diagonale haut gauche")
    }
    print("Pattern vertical")
  }
  print(question)
  return(question)
}

inverse_IQ  = function(model, question){
  mat_motif = matrix(0,8,9)
  mat_motif[1,] = question[1:9]
  mat_motif[2,] = question[10:18]
  mat_motif[3,] = question[19:27]
  mat_motif[4,] = question[28:36]
  mat_motif[5,] = question[37:45]
  mat_motif[6,] = question[46:54]
  mat_motif[7,] = question[55:63]
  mat_motif[8,] = question[64:72]
  print(mat_motif)
  test = matrix(0,2,2*9)
  test[1,] = c(as.matrix(mat_motif[7,]), as.matrix(mat_motif[8,]))
  test[2,] = c(as.matrix(mat_motif[3,]), as.matrix(mat_motif[6,]))
  test = as.numeric(test)
  test = matrix(test, nrow=2)
  p = predict(model,test)
  out = matrix(0,1,9)
  for(j in 1:9){
    if(p[1,j]+p[2,j]>0.7 && p[1,j] !=0 && p[2,j]!=0){
      out[1,j] = 1
    }
  }
  # reponse = matrix(question[9,], nrow=1)
  # if((sum(reponse==out))==9){
  #   print("Prediction identique")
  # }
  # else
  #   {
  #   print("Prediction différente")
  # }
  return(list(o = out, p = p))
}

learn = function(list_finale){
  library(OpenImageR)
  library(keras)
  library(tensorflow)
  
  entree = matrix(0,4*length(list_finale),18)
  entree
  #lignes
  for(i in 1:length(list_finale)){
    print(i)
    entree[i,] = c(as.numeric(list_finale[[i]][1,]),as.numeric(list_finale[[i]][2,]))
    entree[i+length(list_finale),] = c(as.numeric(list_finale[[i]][4,]),as.numeric(list_finale[[i]][5,]))
    
    #colonnes
    entree[i+(2*length(list_finale)),] = c(as.numeric(list_finale[[i]][1,]),as.numeric(list_finale[[i]][4,]))
    entree[i+(3*length(list_finale)),] = c(as.numeric(list_finale[[i]][2,]),as.numeric(list_finale[[i]][5,]))
  }
  
  
  sortie = matrix(0,4*length(list_finale),9)
  for(i in 1:length(list_finale)){
    print(i)
    sortie[i,] = as.numeric(list_finale[[i]][3,])
    sortie[i+length(list_finale),] = as.numeric(list_finale[[i]][6,])
    sortie[i+(2*length(list_finale)),] = as.numeric(list_finale[[i]][7,])
    sortie[i+(3*length(list_finale)),] = as.numeric(list_finale[[i]][8,])
  }
  
  
  model <- keras_model_sequential()
  model %>% 
    layer_dense(units =128, input_shape =18, activation = "relu") %>%  # pour la premiÃ¨re couche, il faut indiquer le nombre d'input 
    # dans input_shape, et le nombre de neurones de la couche cachÃ©e dans units.
    layer_dense(units = 64, activation = "relu") %>%
    # On choisit d'abord une activation linÃ©aire sur cette couche (par dÃ©faut, donc rien Ã  Ã©crire)
    layer_dense(units = 9, activation = "relu") # couche de sortie : 1 neurone dont la valeur de sortie reprÃ©sente la proba 
  # d'Ãªtre de la classe 1 (activation sigmoid, toujours pour la couche de sortie en classification)
  model %>% compile(
    loss = 'mean_squared_error',
    optimizer = 'adam',
    metrics = 'mse'
  )
  model %>% fit(entree, sortie, epochs = 50, batch.size = 10, view.metrics = F) 
  
  return(model)
}